<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            label {
                display: inline-block;
                width: 300px;
                text-align: right;
            }
            input[type="radio"]{
                display: table-cell;
                vertical-align: right;
            }
            fieldset{
                overflow: hidden;
                border: 0;
                display: inline-block;
            }
            input[type="submit"]{
                color: white;
                text-align: center;
                border: none;

                width: 150px;
                align-content: center;
                background-color: cornflowerblue;
                height: 40px;
                color: white;

            }
            select{
                width: 260px;

            }
            input[type="text"]{
                width: 250px;
            }
            [type="checkbox"]
            {
                vertical-align:middle;
            }
        </style>
    </head>
    <body style="background-color: #81b1d6; margin: auto; width: 100%;">
        <h2 style="padding: 30px; text-align: center;">Good Vibes Form</h2>
        <div style="text-align:center; width: 100%;">
            <form style="background-color: grey;">
                <div style="display: inline;">
                    <p>Tell us something positive that happened to you today.</p>
                </div>
                <div style="display: inline;">
                    <label for="fname">Name:</label>
                </div>
                <div style="display: inline;">
                    <input type="text" id="fname" name="fname" placeholder="Enter your name"><br><br>
                </div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your email address"><br><br>
                <label for="">On a scale of 1-10, how good was it?</label>
                <input type="text" id="scale" name="scale" placeholder="Enter a number between 1 and 10"><br><br>
                <label for="location">Where did it happen?</label>
                <select name="location" id="location">
                    <option value="home">At Home</option>
                    <option value="school">School</option>
                    <option value="office">Office</option>
                    <option value="outdoors">Outdoors</option>
                </select>
                <br><br>
                <div style="display: inline;">
                    <label for="time" >At what time did it happen?</label>
                </div>
                <div style="display: inline;">
                    <fieldset style="padding-left: 30px; display: inline;">

                        <input type="radio" id="morning" name="time" value="morning" style="display:inline;">

                        <label for="morning" style="text-align: left;">Morning</label><br>

                        <input type="radio" id="afternoon" name="time" value="afternoon" style="display:inline;">
                        <label for="afternoon" style="text-align: left;">Afternoon</label><br>
                        <input type="radio" id="evening" name="time" value="evening" style="display:inline;">
                        <label for="evening" style="text-align: left;">Evening</label>
                    </fieldset>
                </div>
                <br><br>
                <div style="display: inline;">
                    <label for="feeling" style="">What emotion did you experience?(Select all that apply)</label>
                </div>
                <br>
                <div >
                <input type="checkbox" id="excited" name="vehicle1" value="Bike">
                <label for="vehicle1" style="text-align: left;"> Excited</label><br>
                <input type="checkbox" id="humbled" name="vehicle2" value="Car">
                <label for="vehicle2" style="text-align: left;"> Humbled</label><br>
                <input type="checkbox" id="elated" name="vehicle3" value="Boat">
                <label for="vehicle3" style="text-align: left;"> Elated</label><br>
                <input type="checkbox" id="elated" name="vehicle3" value="Boat">
                <label for="vehicle3" style="text-align: left;"> Loved</label><br>
                <input type="checkbox" id="elated" name="vehicle3" value="Boat">
                <label for="vehicle3" style="text-align: left;"> Enthusiastic</label><br>
                </div>
                <br>
                <label for="description" style="text-align: top;"> Please describe your positive experience.</label>
                <textarea id="description" name="description" rows="4" cols="50" style="resize: none;"></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
