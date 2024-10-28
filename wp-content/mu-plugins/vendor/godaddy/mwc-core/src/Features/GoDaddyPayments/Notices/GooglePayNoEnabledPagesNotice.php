<?php

namespace GoDaddy\WordPress\MWC\Core\Features\GoDaddyPayments\Notices;

use GoDaddy\WordPress\MWC\Common\Admin\Notices\Notice;
use GoDaddy\WordPress\MWC\Common\Traits\CanGetNewInstanceTrait;

class GooglePayNoEnabledPagesNotice extends Notice
{
    use CanGetNewInstanceTrait;

    /** {@inheritdoc} */
    protected $dismissible = false;

    /** {@inheritdoc} */
    protected $type = self::TYPE_ERROR;

    /** {@inheritdoc} */
    protected $id = 'mwc-payments-godaddy-payments-google-pay-no-enabled-pages';

    public function __construct()
    {
        $this->setContent(__('Please select the pages where Google Pay should show.', 'mwc-core'));
    }
}
