<?php
use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'user_email' => 'required|email',
            'category' => 'required|string',
            'description' => 'required'
        ]);

        // Check if category exists, or create it
        $category = Category::firstOrCreate(
            ['name' => $request->category],
            ['icon' => 'ti-briefcase']
        );

        // Create new job
        Job::create([
            'user_email' => $request->user_email,
            'title' => $request->title,
            'location' => $request->location,
            'category_id' => $category->id,
            'tags' => $request->tags,
            'description' => $request->description,
            'application_email' => $request->application_email,
            'application_url' => $request->application_url,
            'closing_date' => $request->closing_date,
            'company_name' => $request->company_name,
            'website' => $request->website,
            'tagline' => $request->tagline,
            'cover_image' => $request->cover_image,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', 'Job posted successfully!');
    }
}
