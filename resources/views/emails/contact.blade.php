<h1>New Contact Submission</h1>

<p><strong>Contact Organisation:</strong> {{ $formData['contact_organisation'] }}</p>
<p><strong>Contact Country:</strong> {{ $formData['contact_country'] }}</p>
<p><strong>Contact Website:</strong> {{ $formData['contact_website'] }}</p>
<p><strong>Contact Email:</strong> {{ $formData['contact_email'] }}</p>
<p><strong>Contact Firstname:</strong> {{ $formData['contact_firstname'] }}</p>
<p><strong>Contact Lastname:</strong> {{ $formData['contact_lastname'] }}</p>
<p><strong>Contact Role:</strong> {{ $formData['contact_role'] }}</p>
<p><strong>Number of Students:</strong> {{ $formData['contact_number_students'] }}</p>

<p>This message was sent at {{ now() }}.</p>
