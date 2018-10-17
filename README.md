# SilverStripe HoneyPot

# Requirements

	$ silverstripe/framework: ^4.0

## Installation (with composer)

	$ composer require camspiers/honeypot

Set the default spam protector in *mysite/_config/spamprotection.yml*

	---
	name: spamprotection
	---
	App\Extensions\FormSpamProtectionExtension:
	  default_spam_protector: CamSpiers\HoneyPot\Protectors\HoneyPotSpamProtector