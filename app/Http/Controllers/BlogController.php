<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('layouts.Blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userblog()
    {
        return view('layouts.Userblog');
    }
public function view1()
{

    $search = $request['search'] ?? "";
    if ($search != "") {
        //where Close Can put Here...
        $blog = Blog::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
    } else {
        //pagination
        $blog = Blog::paginate(10);
    }

    //   echo "<pre>";
    //   print_r($customers->toArray());
    //   echo "</pre>";
    //   die;
    $data = compact('blog', 'search');
   return view('layouts.Userblogview')->with($data);
}
    public function view()
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where Close Can put Here...
            $blog = Blog::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        } else {
            //pagination
            $blog = Blog::paginate(10);
        }

        //   echo "<pre>";
        //   print_r($customers->toArray());
        //   echo "</pre>";
        //   die;
        $data = compact('blog', 'search');
       return view('layouts.Userblogview')->with($data);

        $blog =new Blog();
       $blog =Blog::all();
       $data =compact('blog');
        return view('layouts.Userblogview')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'blogname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string|max:255',
            'contact_no' => 'required|string|max:255',
            'file' => 'required',
        ]);
        $blog = new Blog();
        $blog->username = $request->input('username');
        $blog->blogname = $request->input('blogname');
        $blog->email = $request->input('email');
        $blog->contact_no = $request->input('contact_no');
        $blog->description = $request->input('description');
        $blog->file = $request->input('file');

        $blog->save();
        return back()->with('success', 'The User Blog is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = new Blog();
        $blog = Blog::find($id);
        if (is_null($blog)) {
            return redirect('Userblogview');
        } else {
            $data = compact('blog');
            return view('layouts.Userblog')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->name = $request['name'];
        $blog->email = $request['email'];
        $blog->gender = $request['gender'];
        $blog->address = $request['address'];
        $blog->state = $request['state'];
        $blog->country = $request['country'];
        $blog->dob = $request['dob'];
        $blog->points = $request['points'];
        $blog->save();
        return redirect()->route('Userblogview', ['blog' => $blog]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (!is_null($blog)) {
            $blog->delete();
        }

        // return Blog::destory($id);

        return back()->with('success', 'The User Blog is successfully Delete');
    }

    }

