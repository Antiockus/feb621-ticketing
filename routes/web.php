<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard/tickets', [TicketController::class, 'index'])->name('tickets');
    Route::get('/dashboard/tickets/{ticket}', [TicketController::class, 'show'])->name('singleTicket');

    Route::get('/dashboard/tickets/create_ticket', [TicketController::class, 'create'])->name('createTicket');
    Route::post('/dashboard/tickets/saveTicket', [TicketController::class, 'store'])->name('saveTicket');
    
    
    Route::get('/dashboard/clients', [ClientController::class,'index'])->name('clients');
    Route::get('/dashboard/clients/create_client', [ClientController::class,'create'])->name('create_client');
    Route::delete('/dashboard/clients/{client}/delete', [ClientController::class,'destroy'])->name('delete_client');


    Route::get('/dashboard/clients/{client}', [ClientController::class,'show'])->name('client');
    Route::post('/dashboard/clients', [ClientController::class, 'store'])->name('saveClient');
});



require __DIR__.'/auth.php';
