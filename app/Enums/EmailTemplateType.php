<?php
// app/Enums/EmailTemplateType.php

namespace App\Enums;

class EmailTemplateType
{
    const ProductPurchased = 'product purchased';
    const OrderPlaced = 'order placed';
    const OrderShipped = 'order shipped';
    const UnapidOrdersEmails = 'unapid orders emails';
    const Enquiry = 'enquiry';
    const ProductReviewAdded = 'product review added';

    
    
    public static function all()
    {
        return [
            self::ProductPurchased,
            self::OrderPlaced,
            self::OrderShipped,
            self::UnapidOrdersEmails,
            self::Enquiry,
            self::ProductReviewAdded,
        ];
    }
}
