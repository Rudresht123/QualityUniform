<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteRecord extends Controller
{
    public function deleteRecord(string $table,$id)
    {
        if ($table == 'vendors') {
            $affected = DB::table($table)
                ->where('vendor_id', $id)
                ->update([
                    'deleted_at' => now(),
                ]);
        } else {
            $affected = DB::table($table)
                ->where('id', $id)
                ->update([
                    'deleted_at' => now(),
                ]);
        }

        if (!$affected) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Record not found.',
                ],
                404,
            );
        }

        return response()->json([
            'status' => true,
            'message' => 'Record deleted successfully.',
        ]);
    }
}
