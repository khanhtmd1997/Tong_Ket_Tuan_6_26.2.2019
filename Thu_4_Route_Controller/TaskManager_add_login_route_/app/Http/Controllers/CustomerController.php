<?php

namespace App\Http\Controllers;

use core_question\bank\view;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	public $customers = [];
	
    public function index(Store $Session) {
		if (session("customers")==null){
			$this->customers = [
	        '0' => [
	        	"id"=>"1",
	        	"name"=>"khanh",
	        	"sdt"=>"0364606406",
	        	"email"=>"khanhtmd97@gmail.com"
	        ],
	        "1" => [
	        	"id"=>"2",
	        	"name"=>"khanh123",
	        	"sdt"=>"0364606405",
	        	"email"=>"khanhtmd96@gmail.com"
	        ]
	        ];	
	        session(['customers' =>  $this->customers]);	         
		}else{
			$this->customers = session("customers");
		}


        return view('index',['customers'=>$this->customers]);
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'sdt'     =>  'required',
            'email'     =>  'required'
        ]);
        $this->customers = session('customers');
        $id = count($this->customers);
        $name = $request->name;
        $sdt = $request->sdt;
        $email = $request->email;
        $customer = array('id'=>$id+1,'name'=>$name,'sdt'=>$sdt,'email'=>$email);   
	    $this->customers[$id] = $customer;
	    //giữ session để thêm tiếp customer khác
	    session(['customers' =>  $this->customers]);
	    //tra ve trang index	    	    
	    return redirect('/');
	   
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    	$this->customers = session('customers');
    	$customer = $this->customers[$id-1];

       	return view('show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showEdit($id){
    	$this->customers = session('customers');
    	$customer = $this->customers[$id-1];

       	return view('showEdit', compact('customer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id_)
    {
    	$this->validate($request, [
            'name'    =>  'required',
            'sdt'     =>  'required',
            'email'     =>  'required'
        ]);
        
        $id = count($this->customers);
        $id_ = $request->id;
         $name = $request->name;
        $sdt = $request->sdt;
        $email = $request->email;
        $this->customers = session('customers'); 
        $this->customers[$id] = [
	        	"id"=>$id_,
	        	"name"=>$name,
	        	"sdt"=>$sdt,
	        	"email"=>$email
	        ];
        session(['customers' =>  $this->customers]);	

	    // // //tra ve trang index	    	    
	   	return redirect()->Route('index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request,$id)
    {	
    	
    	$this->customers = session('customers');
    	unset($this->customers[$id -1]);
    	session(['customers' =>  $this->customers]);
    	return redirect()->Route('index');
        
	}
}