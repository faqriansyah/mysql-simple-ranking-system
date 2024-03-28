# simple-rank
This is a php class for wilson ranking algorithm for articles/posts that is based on upvote, downvote, and number of views. This would be useful for those of you that want to create things like best rated posts.

# database
for test, will need a table with this schema :

```
CREATE TABLE voting_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    upvote INT,
    downvote INT,
    view INT
);
```
here is the dummy data 

```
INSERT INTO voting_data (title, upvote, downvote, view) VALUES
('Best Way to Cook Rice', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Tips for Making Delicious Brownies', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Hidden Holiday Destinations in Indonesia', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Latest Movie Review: Ant-Man and the Wasp', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('New Technology in the Automotive Industry', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Simple Recipes for a Healthy Breakfast', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Guide to Growing Ornamental Plants at Home', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Backpacking Experience in Europe', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Economic Growth in Developing Countries', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Tips for Starting an Online Business from Home', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Tricks for Getting a Good Night’s Sleep Every Night', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Latest Music Album Review: Dreams', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Easy Ways to Budget Household Expenses', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Experience of Participating in Marathon Competitions', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Best Book Recommendations to Read This Month', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Tips for Building a Successful Mobile Application', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Cycling Experience on Rural Tourist Routes', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Guide to Choosing the Best Gadgets for Your Needs', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Effective Ways to Save Money for Luxury Vacations', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1),
('Charming Minimalist Living Room Decoration Ideas', FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1, FLOOR(RAND() * 100) + 1);
```
