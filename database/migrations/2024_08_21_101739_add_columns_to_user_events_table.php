<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserEventsTable extends Migration
{
    public function up()
    {
        Schema::table('user_events', function (Blueprint $table) {
            $table->foreignId('user_id')
                  ->after('id') 
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            $table->foreignId('event_id')
                  ->after('user_id') 
                  ->constrained('events')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
        
        });
    }

    public function down()
    {
        Schema::table('user_events', function (Blueprint $table) {
           
            $table->dropForeign(['user_id']);
            $table->dropForeign(['event_id']);
            $table->dropColumn(['user_id', 'event_id', 'created_at', 'updated_at']);
        });
    }
}
