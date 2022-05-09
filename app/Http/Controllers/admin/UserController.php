<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('admin.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nik' => 'required|numeric|digits:16|unique:users',
            'nama_pelanggan' => 'required|max:255|unique:users',
            'alamat' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_telp' => 'required|numeric|digits_between:9,14|unique:users',
            'password' => 'required|string|min:8',
        ]);
        User::create($validatedData);

        return redirect('user')->with('success', 'Data pelanggan berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id',$id)->first();
        return view('admin.user.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('admin.user.edit', compact('data'));
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
        $validatedData = $request->validate([
            'nik' => "required|numeric|digits:16|unique:users,nik,$id",
            'nama_pelanggan' => "required|max:255|unique:users,nama_pelanggan,$id",
            'alamat' => 'required|max:255',
            'email' => "required|string|email|max:255|unique:users,email,$id",
            'no_telp' => "required|numeric|digits_between:9,14|unique:users,no_telp,$id",
            'password' => 'required|string|min:8',
        ]);
        User::where('id',$id)->update($validatedData);

        return redirect('user')->with('success', 'Data pelanggan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::where('id',$id)->delete();
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);

        // return redirect('pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
