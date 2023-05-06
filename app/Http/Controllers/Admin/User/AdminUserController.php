<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $users = User::query()->orderBy('created_at','desc')->paginate(12);
        return view(
            'Admin\pages\users-management\index',
            compact('users')
        );
    }


    public function create()
    {
        return view(
            'Admin\pages\users-management\create'
        );
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name'      => 'required|min:3|max:10',
            'email'     =>  'required|email|min:4|unique:users',
            'password'  => 'required|confirmed:min:6',
            'role'      =>  'required'
        ]);

        $user = new User([
            'name'      => $request->get('name'),
            'email'     =>  $request->get('email'),
            'password'  => md5($request->get('password')),
            'role'      =>  $request->get('role')
        ]);

        $user->save();
        return redirect()->route('admin.user.index')->with('success','Create new user successfully ...');
    }

    /**
     * Summary of edit
     * @param \App\Models\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view(
            'Admin\pages\users-management\edit',
            compact('user')
        );
    }


    /**
     * Summary of update
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user->email_verified_at = null;
        $user->update($request->all());

        return redirect()->back()->with('success', 'Updated successfully');
    }


    /**
     * Summary of destroy
     * @param \App\Models\User $user
     * @return mixed
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->width('success','User successfully deleted !');
    }
}
