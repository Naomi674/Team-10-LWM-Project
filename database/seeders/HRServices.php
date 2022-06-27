<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HRServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('hr_services')->insert([
            'category' => 'Main Service',
            'service' => 'Employee Profile Update',
            'description' => 'Employee data is managed through and in our Personnel Information System. As an employee, you can start the process yourself to change your data via Self Service in Youforce (for example: name and address details, marital status, bank account).',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Main Service',
            'service' => 'Buy / Sell Leave',
            'description' => 'Once a year you can buy and/or sell vacation days',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Main Service',
            'service' => 'Union Contribution',
            'description' => 'Once a year exchange the union contribution for tax purposes',
        ]);



        //Requests
        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Holiday Request',
            'description' => 'Paid time off is requested via and in our Personnel Information System. As an employee, you can start the process of submitting your holiday request via Self Service in Youforce.',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Employment Verification Letter',
            'description' => 'Request an employment verification letter',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Employers Statement for Travel Visa',
            'description' => 'Request assistance to get a travel visa',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Request PTO',
            'description' => 'Put in a request for paid time off days',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Employer Statement for Mortgage',
            'description' => 'Request an employer statement for mortgage',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Commuting Allowance',
            'description' => 'Request for additional commuting travel allowance',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Exchange Return Hours',
            'description' => 'Request to exchange TKU hours for leave',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'ANW Gap Insurance',
            'description' => 'You can insure yourself against the so-called ANW gap',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Car',
            'description' => 'Upgrade or downgrade of company car',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Requests',
            'service' => 'Additional Pension Savings',
            'description' => 'you can save extra for your pension',
        ]);


        //Issues
        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'General HR Related Inquiry',
            'description' => 'Ask a general HR related question',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'General Benefits Inquiry',
            'description' => 'Ask a question about your benefits',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'HR Portal Support Request',
            'description' => 'Ask a question about the HR portal',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'HR System Inquiry',
            'description' => 'Ask questions about the HR system',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'Study Costs Reimbursement Inquiry',
            'description' => 'Ask a question about costs reimbursements',
        ]);

        DB::table('hr_services')->insert([
            'category' => 'Issues',
            'service' => 'Issue with Payslip',
            'description' => 'Report an issue with your salary',
        ]);
        //Feedback
        DB::table('hr_services')->insert([
            'category' => 'Feedback',
            'service' => 'Give Us Feedback',
            'description' => 'Are we doing a good job? How can we improve?',
        ]);

    }
}
