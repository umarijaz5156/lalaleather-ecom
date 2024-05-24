<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_configs')->insert([
            ['subject' => 'Enquiry',
                'template' => '<p>Hello {{user}},</p>
                <p>Thank you for your enquiry. We have received the following information:</p>
                <ul>
                    <li>Email: {{email}}</li>
                    <li>Phone: {{phone}}</li>
                    <li>Message: {{message}}</li>
                </ul>
                <p>We will get back to you as soon as possible. Thank you for reaching out.</p>
                <p>Best regards,</p>
                <p>{{sending}}</p>',
                
                'template_for' => 'enquiry',
            ],
            [
                'subject' => 'Product Purchased',
                'template' => '<p>Dear {{user}},</p>

                <p>your ordder {{orderNumber}} of amount&nbsp; {{order_amount}} has been placed.</p>
                
                <p>{{orderDetails}}</p>
                ',
                
                'template_for' => 'product purchased',
            ],
            [
                'subject' => 'Review Added',
                'template' => '<p>Dear Admin&nbsp;<br />
                New Review added by {{user}} on {{productTitle}}.<br />
                {{productUrl}}&nbsp;</p>',
                
                    'template_for' => 'product review added',
                ]
            ]);
            
    }
}
