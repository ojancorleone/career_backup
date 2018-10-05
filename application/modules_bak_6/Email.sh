#!/bin/bash

while [ 1 ]
do
    curl  http://10.194.176.123/travel_mgt3/mail_forgot_password/sendmail
    curl  http://10.194.176.123/travel_mgt3/mail_notif_approval/sendmail
    curl  http://10.194.176.123/travel_mgt3/mail_notif_tiket/sendmail
sleep 10
done

