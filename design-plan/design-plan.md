# Project 1, Milestone 1 - Design & Plan

Your Name: Vicky Chou

## 1. Persona

[1. Pick a persona]

I have selected Tim as my persona because in anticipation of my website being a rudimentary portfolio of a few class projects I have worked on, I believe that Tim is a good persona for a recruiter. He likes learning the various functionalities of his technologies, has high confidence in his technical abilities, and blames the software vendor if something goes wrong, all of which are likely traits of a recruiter who expects applicants (especially user experience researchers and designers) to have well-designed, easy-to-use websites and who will put the blame on the applicants if some expectation of how a technology works is not met, given that he has so much experience working with various technologies in the first place.

## 2. Sketches

[2. Create some sketches to generate ideas about a website design that would work for your persona.]

My sketches meet the needs of my persona because they are easy to navigate and to-the-point. They depict a visible navigation bar at the top of every screen and a simple adjacent configuration of an image and description of each class project I anticipate including in my portfolio.

![](sketch.png)

## 3. Wireframes

[3. Author detailed wireframes that will become the design that you program for the final milestone.]

![](wireframe_old.png)

<b>UPDATE:</b>
I drew a new wireframe because I decided to make two changes. First, I wanted to make the Home page into an about and contact page instead of a splash page because a splash page seemed unnecessary for the purpose of my website, which is to showcase the class projects I have worked on this past year. And second, I wanted to unlink the current page in the navigation bar instead of bold it because I realized that bolding and writing out the title of the page may be redundant.

![](wireframe_new.jpg)

## 4. Coding Plan & Pseudocode

[4. Author a plan for how you will code your PHP website.]

[Make sure you layout how to you plan to use PHP *includes*.]

1. Create a variable called $currentlink on each page to identify which page the user is currently on. The $currentlink variable should be assigned to the name of the file without the "php" extension.

2. Create a header.php file that will create an associative array called $navlinks and a conditional statement that checks which page the user is currently on. The $navlinks array will contain all of the names of the pages in the navigation bar (ie. all of the possible values of $currentlink variables) as keys and all of the full names of the pages (ie. full names of classes) as values. The conditional statement will be as follows:
        foreach ($navlinks as $navlink) {
          if ($navlink equals $currentlink) {
            echo the <li> tag with a new ID of $clickedlink and the <a href> tag of the current page
            (this $clickedlink ID should bold the name of the page that the user is currently on in the navigation bar)
          }
          else {
            echo the <li> tag with only the <a href> tag of the current page
          }
        }

3. Reference the header.php file in the body of the index.html file in an <includes> tag.

4. Create a function called currenttitle that takes the $currentlink variable as the parameter. The function will be as follows:
        function currenttitle ($currentlink) {
          foreach ($navlinks as $shorttitle => $longtitle) {
            if ($shorttitle equals $currentlink) {
              echo $longtitle
            }
          }
        }

5. Call the currenttitle function in every page.

6. Insert all the images and descriptions of the class projects and style them in CSS.

<b>UPDATE:</b>
I ended up not using a lot of the variable names from my pseudocode because I found it easier to create new names as I programmed my website.
