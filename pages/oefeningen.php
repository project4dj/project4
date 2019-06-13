<?php
    $id = $_SESSION['id'];
    require("./functionality/db.php");
    $cal = 0;
    if(isset($_POST['pushups'])){
        $pushup = $_POST['amt_pushups'];
        $addition = 2*$pushup;
        $sql = "INSERT INTO `oefening` (`OefeningID`, `naam`, `hoeveelheid`, `kalorie`, `fk_userID`) VALUES (NULL, 'push-ups', ".$pushup.", ".$addition.", ".$id.");";
        $result = mysqli_query($conn ,$sql);
    }
    if(isset($_POST['situps'])){
        $situp = $_POST['amt_situps'];
        $addition = 2*$situp;
        $sql = "INSERT INTO `oefening` (`OefeningID`, `naam`, `hoeveelheid`, `kalorie`, `fk_userID`) VALUES (NULL, 'sit-ups', ".$situp.", ".$addition.", ".$id.");";
        $result = mysqli_query($conn ,$sql);
    }
    if(isset($_POST['squats'])){
        $squats = $_POST['amt_squats'];
        $addition = 2*$squats;
        $sql = "INSERT INTO `oefening` (`OefeningID`, `naam`, `hoeveelheid`, `kalorie`, `fk_userID`) VALUES (NULL, 'squats', ".$squats.", ".$addition.", ".$id.");";
        $result = mysqli_query($conn ,$sql);
    }
?>
<div class="row">
    <div class="col-12 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="./images/Utrmara.jpg" alt="pushups">
            <div class="card-body">
                <h4 class="card-title">Push-ups</h4>
                <p class="card-text">Push ups, of ook wel opdrukken, is een van de oudste en bekendste oefeningen om kracht en sterke borstspieren te ontwikkelen. Het enige dat je nodig hebt om push ups te kunnen doen is je eigen lichaamsgewicht. Dit maakt het ideaal om thuis uit te voeren of onderweg, maar vaak zijn de push ups ook onderdeel van een fitness schema, omdat het een groot deel van het bovenlichaam aanspreekt. Met de push ups train je namelijk de pectoralis, oftewel de borstspieren. Naast de borstspieren train je met deze oefening ook de spieren in je schouders, triceps en buikspieren.</p>
                <form method="post">
                    <label for="amt_pushups">Hoeveelheid push-ups: </label>
                    <input type="number" class="form-control form-control-sm" name="amt_pushups" id="amt_pushups">
                    <button type="submit" name="pushups" id="pushups" class="btn btn-primary btn-lg btn-block">Voltooid!</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="./images/Utrmara.jpg" alt="situps">
            <div class="card-body">
                <h4 class="card-title">Sit-Ups</h4>
                <p class="card-text">Wanneer je denkt aan trainen van de buikspieren is de kans groot dat je ook meteen denkt aan de sit up. De sit up is de bekendste buikspieroefening en heeft een vaste plek in veel buikspierkwartiertjes en schema’s. De populariteit van de sit ups is veelal te danken aan het feit dat deze oefening overal uitgevoerd kan worden, met diverse variaties. Helaas is er aan deze populariteit ook meteen een keerzijde. De grootste misvatting is namelijk dat veel mensen denken dat je met sit ups een plattere buik krijgt. Het vet dat je op je buik hebt krijg je alleen weg door je voeding aan te passen en door meer te verbranden dan je tot je neemt. Wat je wel doet met de sit ups, is je buikspieren trainen.</p>
                <form method="post">
                    <div class="form-group">
                      <label for="amt_situps">Hoeveelheid sit-ups: </label>
                      <input type="number" class="form-control form-control-sm" name="amt_situps" id="amt_situps" aria-describedby="helpId" placeholder="">
                      <button type="submit" name="situps" id="situps" class="btn btn-primary btn-lg btn-block">Voltooid!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="./images/Utrmara.jpg" alt="squats">
            <div class="card-body">
                <h4 class="card-title">squats</h4>
                <p class="card-text">Shut up and squat? So you think you can squat? Oh yeah, she squats? Allerlei termen die je op social media voorbij ziet komen die kenmerkend zijn voor de populariteit van deze oefening. De squat is immens populair en dat is niet zonder reden. Het kniebuigen, zoals de oefening in het Nederlands heet, is een van de meest effectieve compound oefeningen die je kunt doen voor de benen, billen, hamstrings, maar ook voor de buikspieren. Dat is een van de voornaamste redenen waarom de oefening de bijnaam: de Koning van alle Fitness Oefeningen draagt. Het is een samengestelde oefening waarbij voornamelijk de quadriceps, hamstrings, bilspieren en kuiten worden getraind. Maar gezien het feit dat je bij de squat het gewicht in evenwicht dient te houden gedurende de hele oefening, activeert dit een grote hoeveelheid van de buikspieren. Samen met de deadlift zou je kunnen stellen dat dit de betere oefeningen zijn om de buikspieren te trainen. Naast het activeren van de vele spierketens zorgt het doen van squat voor een brede spieropbouw. De oefening draagt bij aan het vrijkomen van veel groeihormonen en testosteron, welke niet alleen naar de geactiveerde spieren gaan maar over het hele lichaam bijdragen aan spiergroei. Daarom is de squat onmisbaar in elk fitness schema. Hieronder lees je meer over de uitvoering van de squat.</p>
                <form method="post">
                    <label for="amt_squats">Hoeveelheid squats: </label>
                    <input type="number" class="form-control form-control-sm" name="amt_squats" id="amt_squats">
                    <button type="submit" name="squats" id="squats" class="btn btn-primary btn-lg btn-block">Voltooid!</button>
                </form>
            </div>
        </div>
    </div>
</div>

