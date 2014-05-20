PsychResearchProject
====================

NOTE: I started this off with the hopes of writing pretty code with good version control practices. However, the need to deploy as soon as possible seemed more important. Please don't judge me by my ugly code.

A website for data collection for a psychology research project

====================

#The Project

We wanted to see how one's perception of his or her personality differs from others' perception of the individual's personality.

Each individual will pick adjectives from a list which describe him or her.

![Picture]
(http://blog.lib.umn.edu/reife014/myblog/1153p.jpg)

The adjectives chosen will be used to calculate scores for the Big Five personality traits.

Then the individual will be presented with names of other individuals randomly the name of someone he or she knows is noticed.

The participant will then pick adjectives that describe the other person. He or she will do this for three different people.

#The Plan

###Participants Table
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Authentication_Key</th>
  </tr>
  <tr>
    <td>23</td>
    <td>Bob Smith</td>
    <td>randomlyGeneratedKeyUsedToLogin</td>
  </tr>
</table>

###Outcomes Table

<table>
  <tr>
    <th>ID</th>
    <th>Chooser</th>
    <th>Chosen</th>
    <th>O</th>
    <th>C</th>
    <th>E</th>
    <th>A</th>
    <th>N</th>
    <th>How_Well_You_Know_The_Person</th>
  </tr>
  <tr>
    <td>47</td>
    <td>23</td>
    <td>23</td>
    <td>0</td>
    <td>25</td>
    <td>50</td>
    <td>75</td>
    <td>100</td>
    <td></td>
  </tr>
  <tr>
    <td>48</td>
    <td>23</td>
    <td>27</td>
    <td>100</td>
    <td>75</td>
    <td>50</td>
    <td>35</td>
    <td>0</td>
    <td>75</td>
  </tr>
</table>

==================
#Misc

Although what I am about to write will probably not benefit anyone else, I am using this project as a means to get better at using Git and GitHub. This will actually be my first real project using a version control, so this is meant to be a learning experience.

This will also be my first real project using Laravel. This is going to embarrassing =D
