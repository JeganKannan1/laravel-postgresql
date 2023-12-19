<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::unprepared('
            CREATE OR REPLACE FUNCTION get_user_count()
            RETURNS INTEGER AS $$
            DECLARE
                count_users INTEGER;
            BEGIN
                SELECT COUNT(*)
                INTO count_users
                FROM users;

                RETURN count_users;
            END;
            $$ LANGUAGE plpgsql;
        ');
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP FUNCTION IF EXISTS get_user_count(role_name VARCHAR);');
    }
};
