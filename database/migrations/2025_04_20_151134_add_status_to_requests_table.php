<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToRequestsTable extends Migration
{
    public function up()
    {
        Schema::table('pwa.requests', function (Blueprint $table) {
            $table->enum('status', ['APPROVED', 'DISAPPROVED', 'REQUESTED', 'JUSTIFICATION'])
                  ->default('REQUESTED')
                  ->after('id'); // or after any existing column
        });
    }

    public function down()
    {
        Schema::table('pwa.requests', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
