<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
	
	public function getIndex() 
	{
		$members = Member::all();
		return view('members.index', ['members' => $members]);
	}
	
	public function getAdminIndex() 
	{
		$members = Member::all();
		return view('admin.settings.members.index', ['members' => $members]);
	}
	
	public function getMember($id)
	{
		$member = Member::find($id);
		return view('members.member', ['member' => $member]);
	}
	
	public function getAdminCreate()
	{
		return view('admin.settings.members.create');
	}
	
	public function getAdminEdit($id)
	{	
		$member = Member::find($id);
		return view('admin.settings.members.edit', ['member' => $member, 'memberId' => $id]);
	}
	
    public function memberAdminCreate(Request $request)
	{
		$this->validate($request, [
			'first_name' => 'required|min:2',
			'last_name' => 'required|min:2',
		]);
		
		$member = new Member([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'address' => $request->input('address')
		]);
		
		$member->save();
		
		return redirect()->route('admin.settings.members.index')->with('info', 'Added member.');		
	}
	
	public function memberAdminUpdate(Request $request)
	{
		$this->validate($request, [
			'first_name' => 'required|min:2',
			'last_name' => 'required|min:2'
		]);
		
		$member = Member::find($request->input('id'));
		$member->first_name = $request->input('first_name');
		$member->last_name = $request->input('last_name');
		if ($request->input('active')) {
			$member->active = 1;
		} else {
			$member->active = 0;
		}
		$member->save();
							   
		return redirect()->route('admin.settings.members.index')->with('info', 'Updated member.');		
	}														  
															  
}
