<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\UserSkpd;
use App\Models\DataPengadaan;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   
public function index()
{
    $messages = Message::with(['toUserSkpd.skpdList', 'dataPengadaan'])
        ->where('from_user_id', Auth::guard('userulp')->user()->ulp_id)
        ->get();

    return view('messages.index', compact('messages'));
}

 public function create($to_user_id)
    {
        $toUser = UserSkpd::find($to_user_id);
        return view('messages.create', compact('toUser'));
    }


// public function store(Request $request)
// {
//     $request->validate([
//         'message' => 'required',
//         'to_user_id' => 'required|exists:user_skpd,user_id',
//     ]);

//     // Cari data_pengadaan yang sesuai dengan to_user_id
//     $dataPengadaan = DataPengadaan::where('skpd_id', $request->to_user_id)->first();

//     // Buat pesan baru
//     Message::create([
//         'from_user_id' => Auth::guard('userulp')->user()->ulp_id,
//         'to_user_id' => $request->to_user_id,
//         'message' => $request->message,
//         'data_pengadaan_id' => $dataPengadaan ? $dataPengadaan->data_id : null, // Ambil data_id jika ditemukan
//     ]);

//     return redirect()->route('messages.index')->with('success', 'Pesan evaluasi berhasil dikirim');
// }

public function store(Request $request)
{
    $request->validate([
        'message' => 'required',
        'to_user_id' => 'required|exists:user_skpd,user_id',
    ]);

    // Cari data_pengadaan yang sesuai dengan to_user_id
    $dataPengadaan = DataPengadaan::where('skpd_id', $request->to_user_id)->first();

    // Buat pesan baru dengan status "belum"
    // Message::create([
    //     'from_user_id' => Auth::guard('userulp')->user()->ulp_id,
    //     'to_user_id' => $request->to_user_id,
    //     'message' => $request->message,
    //     'data_pengadaan_id' => $dataPengadaan ? $dataPengadaan->data_id : null, // Ambil data_id jika ditemukan
    //     'status' => 0, // Set the status to "belum" by default

    // ]);

    Message::create([
    'from_user_id' => Auth::guard('userulp')->user()->ulp_id,
    'to_user_id' => $request->to_user_id,
    'message' => $request->message,
    'data_pengadaan_id' => $dataPengadaan ? $dataPengadaan->data_id : null, // Ambil data_id jika ditemukan
    'status' => '0', // Set the status to '0' which matches the ENUM definition
]);

    return redirect()->route('messages.index')->with('success', 'Pesan evaluasi berhasil dikirim');
}


public function show($id)
{
    // Find the message by ID with its relationships
    $message = Message::with(['toUserSkpd', 'dataPengadaan'])->findOrFail($id);

    // Return the view to show the message details
    return view('messages.show', compact('message'));
}


public function edit($id)
{
    $message = Message::find($id);
    return view('messages.edit', compact('message'));
}

// public function update(Request $request, $id)
// {
//     $request->validate([
//         'message' => 'required',
//     ]);

//     $message = Message::find($id);
//     $message->update([
//         'message' => $request->message,
//     ]);

//     return redirect()->route('messages.index')->with('success', 'Pesan evaluasi berhasil diupdate');
// }

public function update(Request $request, $id)
{
    $request->validate([
        'message' => 'required',
        'status' => 'required|in:0,1', // Validate the status field
    ]);

    $message = Message::find($id);
    $message->update([
        'message' => $request->message,
        'status' => $request->status, // Update the status
    ]);

    return redirect()->route('messages.index')->with('success', 'Pesan evaluasi berhasil diupdate');
}


public function destroy($id)
{
    $message = Message::find($id);
    $message->delete();

    return redirect()->route('messages.index')->with('success', 'Pesan berhasil dihapus');
}



}