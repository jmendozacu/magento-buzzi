<?php
/**
 * Copyright © Swarming Technology, LLC. All rights reserved.
 */

class Buzzi_PublishPageView_Model_Cron_Submit extends Buzzi_Publish_Model_Cron_SubmitEventAbstract
{
    /**
     * @return string
     */
    protected function _getEventType()
    {
        return Buzzi_PublishPageView_Model_DataBuilder::EVENT_TYPE;
    }
}
