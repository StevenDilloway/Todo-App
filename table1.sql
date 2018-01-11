/*
Make a small application that can be used as a simple todo list. You should be able to add tasks, view tasks, delete tasks. Each task has a status i.e. Pending, Started, Completed, Late. There is a due date for each task as well.  On the main page you need to show how many total tasks are in the system and the count for each status type i.e. 3 pending tasks. Clicking on the status count filters the list ( or takes you to the new page) with these tasks.*/

/*
This creates table1 i.e. the To Do list
*/

	USE ToDoApp
	
	CREATE TABLE ToDo (
		taskId INTEGER NOT NULL AUTO_INCREMENT,
		taskName VARCHAR (30),
		taskDescription VARCHAR (60),
		status VARCHAR (10),
		dueDate DATE,
		totalTasks INTEGER,
		pendingTasksCount INTEGER,
		startedTasksCount INTEGER,
		completedTasksCount INTEGER,
		lateTasksCount INTEGER,
		PRIMARY KEY (taskId),
		FOREIGN KEY (taskId) REFERENCES ToDo (taskId)/*WRONG - needs to change think about this*/
		};
