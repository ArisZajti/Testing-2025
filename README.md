# Test Plan, Results, and Evaluation 

## Test Plan
## What are we testing?

I want to check the usability of the CRUD that is going to be used in the website. I want to see if the adding, deteting, updating and saving is going to work as intended. I will also check the correspondace between the database and the CRUD.

## User Stories (What should happen)

1. As a user I want to add a plant so that I can remember it.
- If I fill in the form right, the plant shows up in the list. (Happy path)
- If I do not fill in the name, I get an error. (Unhappy path)

- Example:
  - Given a user fills in the plant form correctly
  - When they submit
  - Then the plant appears in the list

2. As a user I want to delete a plant so that if I don't want/need it anymore I can remove it.
- If I click delete, the plant should be there no longer. (Happy path)
- If I try to delete a plant that doesn't exist, nothing happens. (Unhappy path)

- Example:
  - Given a user wants to detele a plant form the list
  - When they press on the delete button
  - Then the plant dissapears from the list

## System Tests:

- User Story 1 (V-model):
- Happy path: Add a plant with all information filled in 
- Unhappy path: Try to add a plant with no name 

- User Story 2 (V-model):
- Happy path: Delete a plant 
- Unhappy path: Try to delete a plant that doesn't exist

- Tests (not V-model):
- List page loads 
- Edit page loads 
- Show page loads 
- Update plant 
- Cannot update plant with empty name 

## Unit Tests

- User Story 1 (V-model):
- As a developer I want to check if the website saves the information that the user puts in.

- User Story 2:
- As a developer I want to check that the information that the user deteled form the website is also deleted form the database.

## What did the tests look like?

- Add plant: test_user_can_create_plant
- No name: test_user_cannot_create_plant_without_name 
- Delete: test_user_can_delete_plant 
- Model: test_plant_mass_assignment 
- List page: test_plant_list_page_loads 
- Edit page: test_edit_plant_page_loads 
- Show page: test_show_plant_page_loads 
- Update: test_update_plant
- Empty name: test_cannot_update_plant_with_empty_name (not V-model)

## Test Results

![Test Results](./Testing_proof.png)

## What can the tests catch?
- If the user forgets to fill in the name of a plant, they get an error.
- If the developer/user add or delete a plant, it happens in the database.

## What can the tests NOT catch?
- If the UI works properly, insivible or missing buttons or the overall look of the page.
- If the database is broken or has any issues.

## Reflection and Evaluation
- The tests cover the CRUD and some edge cases, but do not cover UI/UX or security.
- The tests are automated with a CI/CD pipeline in github
- Factories and seeder are used for consistent testing. 
- For the future implementations add more edge cases for the testing
- Add tests for the UI/UX design (Check is fonts are loagin properly or the buttons are showing and are the right colour).
- Add security tests for a save environment. 
