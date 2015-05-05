<?php
$loader           = require __DIR__.'/vendor/autoload.php';
date_default_timezone_set('America/Los_Angeles');
use Mailgun\Mailgun;
Dotenv::load(__DIR__);

$mg 	= new Mailgun(getenv('EMAIL_API_KEY'));
$domain = getenv('EMAIL_DOMAIN');

$questions = [
	        ['label' => 'Fist Name', 'name' => 'entry.605345560', 'id' => 'entry_605345560', 'type' => 'text', 'value' => '','required' => 'required'],
            ['label' => 'Last Name', 'name' => 'entry.655169055', 'id' => 'entry_655169055', 'type' => 'text', 'value' => '','required' => 'required'],
            ['label' => 'Email Address', 'name' => 'entry.1821265596', 'id' => 'entry_1821265596', 'type' => 'email', 'value' => '','required' => ''],
            ['label' => 'Address - Street', 'name' => 'entry.2015460160', 'id' => 'entry_2015460160', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'City', 'name' => 'entry.2078486123', 'id' => 'entry_2078486123', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'State', 'name' => 'entry.1934645074', 'id' => 'entry_1934645074', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Zip Code', 'name' => 'entry.16080537', 'id' => 'entry_16080537', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Country', 'name' => 'entry.294735419', 'id' => 'entry_294735419', 'type' => 'text', 'value' => '','required' => 'required'],
            // ['label' => 'Gender', 'name' => 'entry.1140435882', 'id' => 'entry_1140435882', 'type' => 'select', 'value' => ['Female','Male','Other'],'required' => 'required'],
            ['label' => 'Personal Website', 'name' => 'entry.956248565', 'id' => 'entry_956248565', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'LinkedIn Profile URL', 'name' => 'entry.2014048069', 'id' => 'entry_2014048069', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Twitter handle', 'name' => 'entry.624236440', 'id' => 'entry_624236440', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'If you have an email list, how many are on it?', 'name' => 'entry.108725597', 'id' => 'entry_108725597', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How many Twitter followers do you have?', 'name' => 'entry.432404442', 'id' => 'entry_432404442', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How many Facebook friends do you have?', 'name' => 'entry.24323521', 'id' => 'entry_24323521', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How many G+ followers do you have?', 'name' => 'entry.769919172', 'id' => 'entry_769919172', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Your title', 'name' => 'entry.868883626', 'id' => 'entry_868883626', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Select your Industry', 'name' => 'entry.238603809', 'id' => 'entry_238603809', 'type' => 'checkbox', 'value' => ['Agriculture','Grocery','Accounting','Health Care','Advertising','Internet Publishing','Aerospace','Investment Banking','Aircraft','Legal','Manufacturing','Apparel & Accessories','Motion Picture & Video','Automotive','Music','Banking','Online Auctions','Brokerage, M&A','Biotechnology','Pharmaceuticals','Call Centers','Private Equity','Cargo Handling','Publishing','Chemical','Real Estate','Copywriting, Marketing','Retail & Wholesale','Consulting','Securities & Commodity Exchanges','Consumer Products','Service','Cosmetics','Defense','Software','Sports','Education','Technology','Electronics','Telecommunications','Energy','Television','Entertainment & Leisure','Transportation','Executive Search','Trucking','Financial Services','Venture Capital','Food, Beverage & Tobacco'],'required' => ''],
            ['label' => 'What does your company do in this industry?', 'name' => 'entry.1459909749', 'id' => 'entry_1459909749', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How many startups have you been involved with?', 'name' => 'entry.730808914', 'id' => 'entry_730808914', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'For your current startup (if applicable), what problem are you solving?', 'name' => 'entry.106485643', 'id' => 'entry_106485643', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How big is your team? How many employees, partners, etc?', 'name' => 'entry.2018857417', 'id' => 'entry_2018857417', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Are you raising capital in the next 6 months?', 'name' => 'entry.1538823649', 'id' => 'entry_1538823649', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Does your idea have the potential to impact a billion people in 10 years?', 'name' => 'entry.1952063752', 'id' => 'entry_1952063752', 'type' => 'checkbox', 'value' => ['Yes','No'],'required' => ''],
            ['label' => 'Describe where you (or your businesses) are today and where you want to be in 5 years', 'name' => 'entry.866299621', 'id' => 'entry_866299621', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'What are you struggling with in your business?', 'name' => 'entry.1839881591', 'id' => 'entry_1839881591', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'What is the single largest outcome you\'re looking to achieve by joining?', 'name' => 'entry.144640973', 'id' => 'entry_144640973', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'What topics and/or industries are you an expert in, and are willing to help other members with?', 'name' => 'entry.459701199', 'id' => 'entry_459701199', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Here is a list of benefits of joining the Exponential Think Tank. Please select the three (3) that are most important to you', 'name' => 'entry.1070744026', 'id' => 'entry_1070744026', 'type' => 'checkbox', 'value' => ['Open Office Hours - asking live questions','Access to the vault of interviews with CEOs and industry leaders','Access to an ongoing mastermind of other exponential entrepreneurs','Lectures on emerging technology, rising trends, and curated items to be aware of','Lectures on robotics, 3D printing, machine learning','Lectures on taking your idea to market, leveraging crowdfunding as well as other marketing strategies','Being among others who have the same ideals and goals as you do'],'required' => ''],
            ['label' => 'What grand challenge are you most interested in solving?', 'name' => 'entry.305701095', 'id' => 'entry_305701095', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'Describe the areas and extent of your business domain expertise?', 'name' => 'entry.1993373390', 'id' => 'entry_1993373390', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'Describe the areas and extent of your technology domain expertise', 'name' => 'entry.217620872', 'id' => 'entry_217620872', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'Describe your experience with crowdfunding campaigns', 'name' => 'entry.2083396095', 'id' => 'entry_2083396095', 'type' => 'textarea', 'value' => '','required' => ''],
            ['label' => 'Are you a member of any of the following organizations?', 'name' => 'entry.966444172', 'id' => 'entry_966444172', 'type' => 'checkbox', 'value' => ['Singularity University','Genius Network','Strategic Coach','Mavericks','YPO','EO','Vistage'],'required' => ''],
            ['label' => 'Are you an angel/venture investor? If yes, how many deals do you do per year?', 'name' => 'entry.1909912922', 'id' => 'entry_1909912922', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'What is your average investment size?', 'name' => 'entry.1392196830', 'id' => 'entry_1392196830', 'type' => 'text', 'value' => '','required' => ''],
            ['label' => 'How did you hear about the Exponential Think Tank?', 'name' => 'entry.1343759642', 'id' => 'entry_1343759642', 'type' => 'text', 'value' => '','required' => ''],
];

// process data from form
$result = [];
foreach ($questions as $key => $item) {
	if(isset($_POST[$item['id']]) && strlen($_POST[$item['id']])) {
		$result[$item['label']] = $_POST[$item['id']];
	}
}

# Now, compose and send your message.
$email = $mg->sendMessage($domain, array('from'    => getenv('EMAIL_LOGIN'), 
'to'      => getenv('EMAIL_INFO'), 
'subject' => 'Order #' . date('m-d-Y H:i:s'), 
'text'    => print_r($result,true)));

echo ('Thank you for your order.');

?>