# Lead Processor - Technical Project

The Lead Processor project allows users to host their own api that lets users process their leads list in new and exciting ways! For now the api grants the ability for users to upload a csv and have that csv be processed by our state of the art pipeline and be sent to onestar_file_hosting. 

## Instructions
Now that the backstory flavor text is out of the way...

This repository is intended to mimic an absolutely **horrendous** codebase and serves as a technical project for Allbound fullstack/backend engineering applicants. This shouldn't take you more than 40-60 minutes. There will be a lot to cover, but it's not imperative that you get everything.

Now, this project is bad, and it's your job, as an aspiring Allbound Engineer, to review this code as if you were on the team and let us all know what was done wrong and why. This includes suggesting new solutions, outlining style inconsistencies, security issues, and more. A full list of what we're looking for is below.

* Step 1 : Clone the Repository
    * In order to mimic a real code review in a safe and secure way, you will need to clone the repository and host it yourself on github, gitlab, bitbucket, or gitea; essentially, any git hosting service that allows public PRs/MRs. 
    * Then open a PR from `bad_branch` into `main`.
    * Lastly, you can add your comments on this PR/MR.
    * If you need help cloning the repo or setting up the PR, please reach out to your Allbound point of contact and we'll get that squared away.

* Step 2 : Analyze the Requirements
    * There is a subsection below that outlines the requirements and acceptance criteria for the resultant PR. Please use this as a framework/checklist for your review
    * This will include, but is not limited to, things like style guidelines, business needs, definition of done, and api schema
    
* Step 3 : Read the Documentation
    * Well, even bad code can have documentation. Make sure you read the documentation to get a full understanding of the project and codebase.
    
* Step 4 : Read the Code and Start Reviewing
    * Now you can start leaving comments on the PR/MR opened in Step 1.
    * Please remember to explain your reasoning for suggestions, even small ones.
    

## Requirements
MUST, MUST NOT, SHOULD, and SHOULD NOT keywords are used as defined in RFC 2119 https://tools.ietf.org/html/rfc2119

Leads Processor is an app that takes files of leads, does some processing and transformations, then uploads them to an external service.

### Vocabulary 
* External Service
    * The final destination for uploaded leads.


### Acceptance Criteria
* Endpoint MUST be able to support dynamic csvs with an unspecified number of fields and rows with unspecified content/data types
* Endpoint MUST be able to upload to the "One Star Upload Service"
* Endpoint SHOULD be able to handle other external services in the future
* Unknown fields MUST passthrough to the external service as-is
* The user MUST NOT be able to upload anything other than a csv file
* /upload endpoint MUST conform to spec outlined in documentation/swagger.yml
* External Service MUST be configured on a per-upload basis. Meaning passed via some query or body parameter
* Endpoint MUST parse and normalize columns with phone numbers to conform to E.164 and RFC-3966 outlined here : https://tools.ietf.org/html/rfc3966

## What we're looking for
First of all, we aren't looking for a perfect solution here or for you to check every box. This is an exercise to see how you read, understand, analyze code, and model problems. We aren't looking for you to code like we would or have the same answers as we do, there aren't any "best" answers. This is more of a task to see how you would work.

**NOTE :** This code probably does not "compile" as-is. That's known and expected. The developer who crafted this test did not actually run this, again, it's meant primarily as a mental exercise.

That being said, here are some pointers and questions we ask ourselves that shape our rubric

* Are there any security issues?
    * SQL Injection, unsafe methods, etc.
* Are there any performance issues?
    * O(n^2) algorithms, under-performant builtins, memory consumption problems
* Style Guidelines
    * Is the style consistent, is the code readable, is it properly commented?
* Does the PR follow specification?
    * Does it match swagger, does it satisfy the acceptance criteria, does the API conform to REST standards?
* Is the code maintainable, future proof, and fault tolerant?
    * Is there adequate testing? 
    * Does the code utilize available design patterns to facilitate code reuse, readability, and maintainability?
    * Is error handling sufficient?
* Does the code cover known edge cases?
    * Are there race conditions?
    * Are there failsafes?
* Are we leveraging existing code?
    * Can the framework handle this?
    * Do we have an existing method we can re-use?
