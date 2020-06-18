<?php
/**
 * Created by PhpStorm.
 * User: josed
 * Date: 03/04/14
 * Time: 01:55 PM
 */


public function isOnTrialSubscription() {

    $isOnTrial = false;

    $activeSubscriptions = $this->getActiveSubscriptions();

    if(count($activeSubscriptions) > 0){
        $validPeriod = false;
        $subscriptionTypeId = 0;

        $subscription = $activeSubscriptions;
        if($subscription) {
            $type = $subscription->type;
            $subscriptionTypeId = $type->getField('id');

            $now = new \DateTime('now');
            $minDateStr = $subscription->start_date->format("Y-m-d");
            $maxDate = new \DateTime($minDateStr);
            $timeUnit = $type->getField('initial_timeunit') != null ? substr($type->getField('initial_timeunit'),0,1) : "D";
            $initialDuration = $type->getField('initial_duration') != null ? $type->getField('initial_duration') : "0";
            $maxDate->add(new \DateInterval( 'P'. $initialDuration . $timeUnit ) ); // P1D means a period of 1 day
            $validPeriod = (strtotime($subscription->start_date) <= strtotime($now) && strtotime($now) <= strtotime($maxDate));
        }
        if($type->getField('initial_duration')!=null && $validPeriod) {
            $isOnTrial = true;
        }
    }

    return $isOnTrial;
}