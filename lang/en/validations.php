<?php

return [
    'UserName' => [
        'required' => 'The name field is required.',
    ],
    'UserEmail' => [
        'required' => 'The email field is required.',
        'email' => 'Please enter a valid email address.',
    ],
    'UserPhone' => [
        'required' => 'The phone field is required.',
    ],
    'UserCountry' => [
        'required' => 'The country field is required.',
    ],
    'UserIndicatif' => [
        'required' => 'The indicatif field is required.',
    ],
    'UserBirthday' => [
        'required' => 'The date of birth field is required.',
        'date' => 'Please enter a valid date of birth.',
    ],
    'UserIdentity' => [
        'required' => 'The identity field is required.',
    ],
    'UserWorkJob' => [
        'required' => 'The work position field is required.',
    ],
    'UserPassword' => [
        'required' => 'The password field is required.',
        'min' => 'The password must be at least 8 characters long.',
    ],
    'UserSecurity' => [
        'required' => 'The security password field is required.',
    ],
    'UserSubscriptionId' => [
        'required' => 'The subscription ID field is required.',
    ],
    'UserSubscriptionMonths' => [
        'required' => 'The subscription duration field is required.',
    ],
    'UserStartOfPeriod' => [
        'required' => 'The period start date field is required.',
    ],
    'UserStatus' => [
        'required' => 'The subscription status field is required.',
    ],
    'UserId' => [
        'required' => 'The user ID field is required.',
    ],
    'userTarget' => [
        'required' => 'The target user field is required.',
    ],
    'lang' => [
        'required' => 'The language field is required.',
    ],
    'SubscriptionId' => [
        'required' => 'The subscription ID field is required.',
    ],
    'SubscriptionName' => [
        'required' => 'The subscription name field is required.',
    ],
    'SubscriptionGroup' => [
        'required' => 'The subscription group field is required.',
    ],
    'SubscriptionPrice' => [
        'required' => 'The subscription price field is required.',
    ],
    'SubscriptionBilling' => [
        'required' => 'The subscription billing field is required.',
    ],
    'SubscriptionManager' => [
        'required' => 'The subscription manager field is required.',
    ],
    'SubscriptionSessions' => [
        'required' => 'The subscription sessions field is required.',
    ],
    'InsuranceId' => [
        'required' => 'The insurance ID field is required.',
    ],
    'GroupId' => [
        'required' => 'The group ID field is required.',
    ],
    'GroupName' => [
        'required' => 'The group name field is required.',
    ],
    'InvoiceId' => [
        'required' => 'The invoice ID field is required.',
    ],
    'chartFilterA' => [
        'required' => 'The start date field is required.',
        'date' => 'Please enter a valid start date.',
    ],
    'chartFilterB' => [
        'required' => 'The end date field is required.',
        'date' => 'Please enter a valid end date.',
        'after_or_equal' => 'The end date must be the same as or after the start date.',
    ],
    'scheduleName' => [
        'required' => 'The schedule name field is required.',
    ],
    'scheduleColor' => [
        'required' => 'The schedule color field is required.',
    ],
    'scheduleStart' => [
        'required' => 'The schedule start time field is required.',
    ],
    'scheduleFinish' => [
        'required' => 'The schedule end time field is required.',
    ],
    'scheduleId' => [
        'required' => 'The schedule ID field is required.',
    ],
    'invalidemailaddress' => [
        'required' => 'Please enter a valid email address.',
    ],
    'incorrectpassword' => [
        'required' => 'The password you entered is incorrect.',
    ],
    'SystemName' => [
        'required' => 'The system name field is required.',
    ],
    'SystemLanguage' => [
        'required' => 'The system language field is required.',
    ],
    'undefineduserjob' => 'Undefined user job: ',
    'targetnotexist' => 'The target user does not exist.',
    'targetdeleted' => 'The target user has been deleted.',
    'targetnotvalid' => 'The target user is not valid.',
    'passwordnotvalid' => 'The password you provided is not valid.',
    'jsonsuccess' => 'Your request was successful.',
    'namealreadyassociated' => 'The name you provided is already associated with an existing package.',
    'subscriptionnotassociated' => 'The subscription you provided is not associated with any packages.',
    'invalidrequest' => 'Invalid request: ',
    'ContactName' => [
        'required' => 'The contact name field is required.',
    ],
    'ContactPhone' => [
        'required' => 'The contact phone field is required.',
    ],
    'ContactBirthday' => [
        'required' => 'The contact date of birth field is required.',
    ],
    'ContactEmail' => [
        'required' => 'The contact email field is required.',
    ],
    'ContactAddress' => [
        'required' => 'The contact address field is required.',
    ],
    'ContactCity' => [
        'required' => 'The contact city field is required.',
    ],
    'ContactZipcode' => [
        'required' => 'The contact zip code field is required.',
    ],
    'ContactJob' => [
        'required' => 'The contact job position field is required.',
    ],
    'ContactSalary' => [
        'required' => 'The contact salary field is required.',
    ],
    'ContactCompany' => [
        'required' => 'The contact company field is required.',
    ],

    'CompanyName' => [
       'required' => 'The company name field is required.',
    ],
    'CompanyAddress' => [
      'required' => 'The company address field is required.',
    ],
    'CompanyCity' => [
      'required' => 'The company city field is required.',
    ],

    'GroupAbout' => [
        'required' => 'The group description field is required.',
    ],
    'SubscriptionCharging' => [
        'required' => 'The subscription billing field is required.',
    ],
    'InvoiceAmount' => [
        'required' => 'The invoice amount field is required.',
    ],
    'ApplicationHost' => [
        'required' => 'The application host field is required.',
    ],
    'ApplicationPort' => [
        'required' => 'The application port field is required.',
    ],
    'ApplicationEncryption' => [
        'required' => 'The application encryption field is required.',
    ],
    'ApplicationUsername' => [
        'required' => 'The application username field is required.',
    ],
    'ApplicationPassword' => [
        'required' => 'The application password field is required.',
    ],
    'ApplicationSenderAddress' => [
        'required' => 'The sender email address field is required.',
    ],
    'ApplicationSenderName' => [
        'required' => 'The sender name field is required.',
    ],
    'ApplicationDomain' => [
        'required' => 'The email domain field is required.',
    ],
    'Timezone' => [
        'required' => 'The timezone field is required.',
    ],
    'Director' => [
        'required' => 'The director field is required.',
    ],
    'Currency' => [
        'required' => 'The currency field is required.',
    ],
    'Mobile' => [
        'required' => 'The mobile field is required.',
    ],
    'usercreated' => 'The user has been created successfully.',
    'userdashboardnotexits' => 'User dashboard does not exist',
    'userdashboardexpired' => 'User dashboard has expired; please contact support.',
    
    'smtp_connection_failed' => 'SMTP connection failed',
    'domain_verification_failed' => 'Domain verification failed',
];
