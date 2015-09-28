@extends('app')

@section('content')

<div class="container">
	<div class="faq-wrapper">
		<div class="row">
			<div class="col-sm-6">
			<h1>FAQ</h1>
			<p><b>Q: How do I add a new task?</b></p>
			<p>A: Click on the button "Create New Task", create your task and hit Submit.</p>
			<p><b>Q: How do I delete a task?</b></p>
			<p>A: In your default view, click on the button that has a red x or if you are viewing the specfic task, click the button "Delete". You will be asked to confirm your delete request before all changes are final.</p>
			<p><b>Q: How do I edit a task?</b></p>
			<p>A: Click on the task and once you are on the task page, click on the button "Edit your Task"</p>
			<p><b>Q: How do I mark the status of a task as complete?</b></p>
			<p>A: On the default view, click on the green checkmark to complete a task. If yo are viewing the specific task page, click on the button "Mark Status Complete"</p>
			<p><b>Q: I accidentally marked a task complete. Can I change the status of a task back to active?</b></p>
			<p>A: Yes, you can always edit the status of a task. Click on the task in question and click the button "Mark Status Active."</p>
			<p><b>Q: Can I clear the completed tasks from my view?</b></p>
			<p>A: Yes. On the default view, click the button "Clear Completed" which will permanently delete all completed tasks.</p>
			</div>
		</div>
	</div>
</div>