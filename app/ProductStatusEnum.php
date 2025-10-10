<?php

namespace App;

enum ProductStatusEnum: string
{
    // create ENUM for Product Status
    case IN_STOCK = 'in stock';
    case SOLD_OUT = 'sold out';
    case COMING_SOON = 'coming soon';
}
