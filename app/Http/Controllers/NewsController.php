<?php

namespace App\Http\Controllers;

use App\Models\GeneratedReports;
use App\Models\Post;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Exception;

class NewsController extends Controller
{
    
    protected $post,$report,$generatedR;
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['adminSignup']]);
            $this->post=new Post();
            $this->report=new Report();
            $this->generatedR=new GeneratedReports();
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'catagory' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
            'image' => ['required', 'string'],          
        ]);
    }

    protected function postN(Request $request){
        return view('newsPost.post');
    }

    protected function post(Request $request)
    {
        $user= Auth::user();
        DB::beginTransaction();
        try{
            if(auth()->user()->type=='User'){
            return ['status'=>false, 'message'=>'You are not a Bloger',401]; 
        }
        else{
            $news = $request->message;
            $command = escapeshellcmd('/bin/python3 /home/lotus/Documents/FND/routes/pythonFile/newsHandler.py "'.$news.'"');
            $raw_output=[];
            exec($command,$raw_output);
            $output = $raw_output[0];      
         if ($output == "True"){
                $post=$this->post->create([
                    'username'=>$user->name,
                    'email'=>$user->email,
                    'title'=>$request->title,
                    'catagory'=>$request->catagory,
                    'message'=>$request->message,
                    'image'=>$request->image,
                ]);
                if($post){
                    DB::commit();
                    return  redirect('/post')->with('message','News Posted successfully');
                }
                else{
        
                    return  redirect('/post')->with('error','something went wrong');
                }
            }
            elseif($output == "False"){
                $report=$this->report->create([
                    'username'=>$user->name,
                    'email'=>$user->email,
                    'title'=>$request->title,
                    'catagory'=>$request->catagory,
                    'message'=>$request->message,
                    'image'=>$request->image,
                ]);
                if($report){
                    DB::commit();
                    return  redirect('/post')->with('error','something went wrong');
        
                }
                else{
                    return ['status'=>false, 'message'=>'something went wrong'];
                }
            }
            
            }    
        
    
    }
     catch(Exception $ex){
          DB::rollback();
     }

    }

    //manage post
    public function getPost(){
        $news= Post::all();
        return view('newsPost.managePost',compact('news'));
    }
    public function deletePost($id){
        $new =Post::find($id)->delete();
        return redirect('/managePost')->with('status','Post Delete successfully');

    }
    public function editP($id){
        $new =Post::find($id);
        return view('newsPost.editPost',compact('new'));
    }
    public function editPost(Request $request,$id){
        // $new =Post::find($id);
        if(Post::where('id',$id)->exists()){
            $post =Post::find($id);
            $post->title = $request->title;
            $post->catagory = $request->catagory;
            $post->message = $request->message;
            $post->image = $request->image;
            $post->save();
            return redirect('/managePost')->with('status','Post updated successfully');
        }
        else{
            return redirect()->route('newsPost.editPost')->with('error','Something went wrong');

        }
    }


    //generate
    public function getReport(){
        $news= Report::all();
        return view('admin.report.generateR',compact('news'));
    }

    //edit
    public function edit($id){
        $new =Report::find($id);
       $count= DB::table("posts")->count();
        return view('admin.report.report',compact('new','count'));
    }

    public function generate(Request $request,$id){
        // $new =Post::find($id);
        if(Report::where('id',$id)->exists()){
            $post =Report::find($id);
            $post->username = $request->username;
            $post->email = $request->email;
            $post->title = $request->title;
            // $post->NumberOfPost = $request->NumberOfPost;
            $post->created_at = $request->posted_date;  
            // $post->save();
            if($post){
                $report=$this->generatedR->create([
                    'username'=>$request->username,
                    'email'=>$request->email,
                    'title'=>$request->title,
                    'NumberOfPost'=>$request->NumberOfPost,
                    'posted_date'=>$request->posted_date,              
                ]);
                return redirect('/admin/generateR')->with('status','report send successfully');
            }
            else{
                return redirect('/admin/generateR')->with('error','Something went wrong');
    
            }
            }
                    
}
}