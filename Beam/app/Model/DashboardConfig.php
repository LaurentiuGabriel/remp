<?php

namespace App\Model;

use MabeEnum\Enum;

class DashboardConfig extends Enum
{
    const CONVERSIONS_COUNT_THRESHOLD_LOW =  'conversions_count_threshold_low';
    const CONVERSIONS_COUNT_THRESHOLD_MEDIUM =  'conversions_count_threshold_medium';
    const CONVERSIONS_COUNT_THRESHOLD_HIGH =  'conversions_count_threshold_high';
    const CONVERSION_RATE_THRESHOLD_LOW =  'conversion_rate_threshold_low';
    const CONVERSION_RATE_THRESHOLD_MEDIUM =  'conversion_rate_threshold_medium';
    const CONVERSION_RATE_THRESHOLD_HIGH =  'conversion_rate_threshold_high';
}
