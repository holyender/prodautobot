<?php

class ProdTestCest{

	var $ccOwnerFirst = "FN12345";
	var $ccOwnerLast = "LN12345";
	var $ccNum = "4242424242424242";
	var $ccExpMonth = "12 - December";
	var $ccExpYear = "2025";
	var $ccCVV = "789";

	/*public function individualgift(AcceptanceTester $I){
		$tmp = (string)rand(1,900000);
		$I->amOnPage('/');
		#$I->click('log in');
		$I->wait(2);
		$I->amOnPage('/user');
		$I->click('Sign up');
		$I->amOnPage('/gift/individual');

		$I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
		$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
		$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        //$I->fillField('#edit-profile-main-field-billing-phone-und-0-value', '1234567899');
		$I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/individual/member-card');

		$I->fillField('#edit-profile-main-mail', 'gifttest'.$tmp.'@jointest.com');
        #$I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        #$I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
		$I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
		$I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        //$I->fillField('#edit-profile-main-field-billing-phone-und-0-value', '1234567899');
		$I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
		$I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');

		$I->fillField('#edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
		$I->fillField('#edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');

        //$I->fillField('edit-member-card-membership-card-card-name-first-und-0-value', 'FN'.$tmp.'');
        //$I->fillField('edit-member-card-membership-card-card-name-last-und-0-value', 'LN'.$tmp.'');
		$I->click('#edit-continue');

		$I->wait(5);

		$I->seeCurrentUrlEquals('/gift/individual/review');
		$I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');

		$I->checkOption('#edit-membership-review-membership-terms');
		$I->click('#edit-continue');

		$I->wait(5);
		$I->seeCurrentUrlEquals('/gift/individual/payment-method');
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst.' '.$this->ccOwnerLast);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', $this->ccNum);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', $this->ccExpMonth);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', $this->ccExpYear);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', $this->ccCVV);


		$I->wait(5);

		$I->click('#edit-continue');

		$I->wait(5);
		$I->see("Thank You");
		$I->seeCurrentUrlEquals('/gift/individual/complete');
		$I->wait(3);

	}
*/
	 public function individualtest(AcceptanceTester $I){
        $tmp = (string)rand(1,900000);

        $renewTmp = $tmp;

    	$I->amOnPage('/');
    	$I->amOnPage('/user');
    	$I->click('Sign up');
    	$I->amOnPage('/join/individual');

        $I->fillField('#edit-join-account-account-mail', 'jointest'.$tmp.'@jointest.com');
        $I->fillField('#edit-join-account-account-user-pass-pass1', 'testregisterPassword');
        $I->fillField('#edit-join-account-account-user-pass-pass2', 'testregisterPassword');
        $I->fillField('#edit-profile-main-field-profile-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-profile-location-und-0-postal-code', '10027');
        $I->fillField('#edit-profile-main-field-profile-phone-und-0-value', '1234567899');
        $I->fillField('#edit-profile-main-field-billing-first-name-und-0-value', 'FN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-last-name-und-0-value', 'LN'.$tmp.'');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-thoroughfare', '123 testaddress1 st.');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-premise', 'apartment addr2');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-locality', 'testjoincity');
        $I->fillField('#edit-profile-main-field-billing-location-und-0-postal-code', '10027');
        $I->selectOption('#edit-profile-main-field-profile-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-profile-location-und-0-administrative-area', 'New York');
        $I->selectOption('#edit-profile-main-field-billing-title-und', 'Dr.');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-country', 'United States');
        $I->selectOption('#edit-profile-main-field-billing-location-und-0-administrative-area', 'New York');
        $I->click('#edit-continue');

        $I->wait(5);

        $I->amOnPage('/join/individual/member-card');
        $I->wait(5);
        $I->click('#edit-continue');
        $I->wait(5);

        $I->amOnPage('/join/individual/review');
        $I->executeJS('jQuery("#edit-membership-review-membership-terms").show()');
        $I->checkOption('#edit-membership-review-membership-terms');
        $I->click('#edit-continue');

        $I->wait(5);
        $I->amOnPage('/join/individual/payment-method');

        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst.' '.$this->ccOwnerLast);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', $this->ccNum);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', $this->ccExpMonth);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', $this->ccExpYear);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', $this->ccCVV);

        $I->wait(5);
        $I->click('#edit-continue');
        $I->wait(10);
        $I->see("Thank You");

    }


	    public function donatetest(AcceptanceTester $I)
    {
        $tmp = (string)rand(1,900000);
        $I->amOnPage('/');
        #$I->click('donations');
        $I->amOnPage('/make-monetary-donation-now');

        $I->wait(2);

        $I->checkOption('#edit-amount-amount-25');

        #$I->fillField('Dedication Message', 'testDedicationMessage');
        #$I->selectOption('#edit-amount-field-cobblestone-honoree-title-und', 'Dr.');
        #$I->fillField('Honoree First Name','testHonorFN');
        #$I->fillField('Honoree Last Name','testHonorLN');
        #$I->fillField('Honoree Organization Name','testHonorOrg');
        $I->fillField('#edit-customer-profile-shipping-field-email-und-0-value','testHonorEmail'.$tmp.'@jointest.com');
        
        $I->fillField('First name','testFN');
        $I->fillField('Last name','testLN');
        $I->fillField('Company','testCompany');
        $I->selectOption('Country','United States');
        $I->fillField('Address 1','123 Test Street');
        $I->fillField('Address 2','apt 2b');
        $I->fillField('City','testCity');
        $I->selectOption('State','New York');
        $I->fillField('ZIP code','10027');
        $I->fillField('Phone','2019788216');

        $I->executeJS('jQuery("#edit-customer-profile-billing-commerce-customer-profile-copy").show()');

        $I->checkOption('#edit-customer-profile-billing-commerce-customer-profile-copy');

        $I->wait(2);

        $I->click('op'); //click donate button name of button is 'op'

        $I->executeJS('jQuery("#recurring-form").show()');

        $I->waitForElement('#recurring-form', 30);

        $I->executeJS('jQuery("#ui-id-1").show()');
        $I->wait(2);

        $I->click('No, one-time only');

        $I->amOnPage('/make-monetary-donation-now/review');

        $I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-owner', $this->ccOwnerFirst.' '.$this->ccOwnerLast);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-number', $this->ccNum);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-month', $this->ccExpMonth);
		$I->selectOption('#edit-commerce-payment-payment-details-credit-card-exp-year', $this->ccExpYear);
		$I->fillField('#edit-commerce-payment-payment-details-credit-card-code', $this->ccCVV);

        $I->wait(2);

        $I->click('op');

        $I->amOnPage('/make-monetary-donation-now/complete');

        $I->see('Thank You');

        $I->wait(2);
    }

}