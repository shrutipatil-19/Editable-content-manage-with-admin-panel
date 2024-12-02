<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\FeatureCard;
use App\Models\BestFeatureCard;
use App\Models\ctaSections;
use App\Models\ParallaxBanner;
use App\Models\Space;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\About;
use App\Models\Team;
use App\Models\Event;
use App\Models\PersonalEvents;

class HomeController extends Controller
{
  public function index()
  {
    $banner = Banner::first();
    $featureCards = FeatureCard::all();
    $bestfeatureCards = \App\Models\BestFeatureCard::all();
    $cta = ctaSections::first();
    $ParallaxBanner = ParallaxBanner::all();
    $spaces = Space::all();
    return view('welcome', compact('banner', 'featureCards', 'bestfeatureCards', 'cta', 'ParallaxBanner', 'spaces'));
  }
  public function submitContact(Request $request)
  {
    // dd($request->all());
    // Validate the incoming data
    $request->validate([
      'Name' => 'required',
      'Email' => 'required|email',
      'Phone' => 'required|digits:10',
      'Subject' => 'required',
      'Message' => 'required',
    ]);
    // Store data in the database
    // dd($request->all());
    Message::create($request->all());
    // You can process the data here (store it in DB, send email, etc.)
    // For now, we'll just return a simple message.

    return back()->with('success', 'Your message has been sent successfully!');
  }
  public function contact()
  {
    return view('contact');
  }
  public function store(Request $request)
  {
    // Validate incoming request data
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required|string|max:15',
      'message' => 'required|string',
    ]);

    // Create a new contact entry in the database
    Contact::create($request->all());

    // Return a response or redirect
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
  }
  public function about()
  {
    $bestfeatureCards = \App\Models\BestFeatureCard::all();
    $ParallaxBanner = ParallaxBanner::all();
    $aboutUs = \App\Models\About::first();
    $teams = Team::all(); // Get all speakers
    // Pass the data to the 'about' view
    return view('about', compact('bestfeatureCards', 'ParallaxBanner', 'aboutUs', 'teams'));
  }

  public function event()
  {
    $Events = Event::all(); // Fetch all events

    return view('Event', compact('Events'));
  }
  public function show($id, Request $request)
  {
    $Event = Event::findOrFail($id); // Fix: Removed Request parameter in findOrFail
    // $PersonalEvents = PersonalEvents::all();

    $status = $request->input('status', 'default_status'); // Use request to get the status (provide a default if needed)
    $projects = PersonalEvents::where('status', $status)->get(); // Fix: Ensure to call ->get() to retrieve data

    return view('eventDetail', compact('Event', 'projects', 'status'));
  }


  public function peronaleventshow($id)
  {
    $PersonalEvents = PersonalEvents::findOrFail($id);

    // dd($Event);
    return view('personalEventDetail', compact('PersonalEvents'));
  }
  public function enquiry()
  {
    return view('enquiry');
  }
  public function enquiry_store(Request $request)
  {
      // Validate incoming request data
      $validatedData = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'phone' => 'required|string|max:15',
          'message' => 'required|string',
          'event_type' => 'required|string',  // Validate event_type
      ]);
  
      // Create a new contact entry in the database
      Enquiry::create([
          'name' => $validatedData['name'],
          'email' => $validatedData['email'],
          'phone' => $validatedData['phone'],
          'message' => $validatedData['message'],
          'event_type' => $validatedData['event_type'], // Make sure it matches the field name
      ]);
  
      // Return a response or redirect
      return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
  }
  
}