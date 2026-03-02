<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            ['id' => 1, 'hotel_id' => 1, 'name' => 'Prof. Fehér Bence', 'check_in' => '2024-08-10', 'check_out' => '2025-06-08', 'number_of_guests' => 3, 'type' => 'family'],
            ['id' => 2, 'hotel_id' => 1, 'name' => 'Magyar Kornél PhD', 'check_in' => '2024-09-29', 'check_out' => '2025-10-04', 'number_of_guests' => 4, 'type' => 'family'],
            ['id' => 3, 'hotel_id' => 1, 'name' => 'Veresné Fodor Szandra', 'check_in' => '2024-11-30', 'check_out' => '2026-03-05', 'number_of_guests' => 6, 'type' => 'family'],
            ['id' => 4, 'hotel_id' => 1, 'name' => 'Prof. Oláh Balázs', 'check_in' => '2024-06-17', 'check_out' => '2025-08-05', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 5, 'hotel_id' => 1, 'name' => 'Budai Árpád PhD', 'check_in' => '2024-10-17', 'check_out' => '2025-09-01', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 6, 'hotel_id' => 2, 'name' => 'Kozma Ernő PhD', 'check_in' => '2024-12-17', 'check_out' => '2025-11-03', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 7, 'hotel_id' => 2, 'name' => 'Simon Vincéné', 'check_in' => '2024-07-12', 'check_out' => '2025-05-06', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 8, 'hotel_id' => 2, 'name' => 'Ifj. Orbán Bendegúz', 'check_in' => '2025-01-02', 'check_out' => '2025-10-23', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 9, 'hotel_id' => 2, 'name' => 'Prof. Jakab Milla', 'check_in' => '2024-08-08', 'check_out' => '2025-12-18', 'number_of_guests' => 6, 'type' => 'family'],
            ['id' => 10, 'hotel_id' => 2, 'name' => 'Fülöp Antal', 'check_in' => '2024-07-23', 'check_out' => '2026-01-07', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 11, 'hotel_id' => 3, 'name' => 'Nemes István', 'check_in' => '2025-01-23', 'check_out' => '2025-11-19', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 12, 'hotel_id' => 3, 'name' => 'Szücs Attila PhD', 'check_in' => '2025-02-15', 'check_out' => '2025-08-03', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 13, 'hotel_id' => 3, 'name' => 'Hajdu Géza PhD', 'check_in' => '2024-05-09', 'check_out' => '2025-05-26', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 14, 'hotel_id' => 3, 'name' => 'Szücs Patrícia', 'check_in' => '2024-11-08', 'check_out' => '2025-12-26', 'number_of_guests' => 6, 'type' => 'family'],
            ['id' => 15, 'hotel_id' => 3, 'name' => 'Id. Soós Szervác', 'check_in' => '2024-06-23', 'check_out' => '2025-12-23', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 16, 'hotel_id' => 1, 'name' => 'Báró Máté Áron PhD', 'check_in' => '2024-11-06', 'check_out' => '2025-09-03', 'number_of_guests' => 4, 'type' => 'family'],
            ['id' => 17, 'hotel_id' => 1, 'name' => 'Pataki-Gáspár Kata', 'check_in' => '2024-07-03', 'check_out' => '2025-10-08', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 18, 'hotel_id' => 1, 'name' => 'Özv. Török Dorián PhD', 'check_in' => '2024-06-03', 'check_out' => '2025-12-10', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 19, 'hotel_id' => 1, 'name' => 'Özv. Papp Vincéné', 'check_in' => '2024-04-06', 'check_out' => '2025-08-30', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 20, 'hotel_id' => 1, 'name' => 'Dr. Veres Endre PhD', 'check_in' => '2024-06-10', 'check_out' => '2025-06-20', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 21, 'hotel_id' => 1, 'name' => 'Juhász-Kerekes Adél', 'check_in' => '2025-03-18', 'check_out' => '2025-09-23', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 22, 'hotel_id' => 1, 'name' => 'Kis Barna PhD', 'check_in' => '2024-11-15', 'check_out' => '2025-05-08', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 23, 'hotel_id' => 1, 'name' => 'Prof. Lengyel Zsombor PhD', 'check_in' => '2024-04-20', 'check_out' => '2025-04-08', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 24, 'hotel_id' => 1, 'name' => 'Váradi Ottó PhD', 'check_in' => '2024-09-02', 'check_out' => '2025-12-09', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 25, 'hotel_id' => 1, 'name' => 'Prof. Deák Zsoltné', 'check_in' => '2024-12-26', 'check_out' => '2025-07-06', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 26, 'hotel_id' => 1, 'name' => 'Máté Mia', 'check_in' => '2025-03-20', 'check_out' => '2025-12-25', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 27, 'hotel_id' => 1, 'name' => 'Varga Áronné', 'check_in' => '2025-03-11', 'check_out' => '2026-03-09', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 28, 'hotel_id' => 1, 'name' => 'Fekete Dalma PhD', 'check_in' => '2024-12-27', 'check_out' => '2025-05-17', 'number_of_guests' => 4, 'type' => 'family'],
            ['id' => 29, 'hotel_id' => 1, 'name' => 'Bognár Patrik PhD', 'check_in' => '2024-11-27', 'check_out' => '2025-11-03', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 30, 'hotel_id' => 1, 'name' => 'Prof. Pásztor Benedek', 'check_in' => '2024-12-16', 'check_out' => '2025-06-10', 'number_of_guests' => 3, 'type' => 'family'],
            ['id' => 31, 'hotel_id' => 1, 'name' => 'Simon Rudolf PhD', 'check_in' => '2024-07-10', 'check_out' => '2025-11-10', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 32, 'hotel_id' => 1, 'name' => 'Özv. Kozma Endrené', 'check_in' => '2025-03-27', 'check_out' => '2025-04-02', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 33, 'hotel_id' => 1, 'name' => 'Pap Rebeka PhD', 'check_in' => '2024-04-26', 'check_out' => '2025-11-25', 'number_of_guests' => 3, 'type' => 'family'],
            ['id' => 34, 'hotel_id' => 1, 'name' => 'Dr. Szőke Barnabásné', 'check_in' => '2024-04-02', 'check_out' => '2025-07-24', 'number_of_guests' => 4, 'type' => 'family'],
            ['id' => 35, 'hotel_id' => 1, 'name' => 'Szalai Doriánné', 'check_in' => '2025-01-01', 'check_out' => '2025-05-03', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 36, 'hotel_id' => 1, 'name' => 'Fodor Gábor PhD', 'check_in' => '2024-05-10', 'check_out' => '2026-01-26', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 37, 'hotel_id' => 1, 'name' => 'Kocsis Maja', 'check_in' => '2025-02-10', 'check_out' => '2025-09-06', 'number_of_guests' => 2, 'type' => 'double'],
            ['id' => 38, 'hotel_id' => 1, 'name' => 'Bálint Endrené', 'check_in' => '2024-09-14', 'check_out' => '2025-04-10', 'number_of_guests' => 2, 'type' => 'twin'],
            ['id' => 39, 'hotel_id' => 1, 'name' => 'Tóthné Papp Olívia', 'check_in' => '2024-12-23', 'check_out' => '2025-11-11', 'number_of_guests' => 1, 'type' => 'single'],
            ['id' => 40, 'hotel_id' => 1, 'name' => 'Balog Mirella', 'check_in' => '2025-03-16', 'check_out' => '2025-10-31', 'number_of_guests' => 1, 'type' => 'single'],
        ]);
    }
}
