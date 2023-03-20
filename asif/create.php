<html>
    <title>
        Create
    </title>
    <body>
        
    <form action="createhandle.php" method="POST" enctype="multipart/form-data">

    <fieldset>
                    Specification Name: <input type="text" name="name" value=""/> <br>
                    Specification Role: <input type="text" name="role" value=""/> <br>
                    Screen Defination: <input type="text" name="screendefination" value=""/> <br>
                    User Story: <input type="text" name="story" value=""/> <br>
                    Acceptance Criterea: <input type="text" name="criteria" value=""/> <br>
                    UI screen : <input type="file" name="file" value="" /> <br>
                    Tags: <input type="text" name="tags" value=""/> <br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            <a href="createspecification.php">Back</a>

    </form>
    </body>
</html>