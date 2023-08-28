    <?php
    function checkID(){
    $pagesID = $_GET['page'];
    return $pagesID;
    //echo "page id: " . $pagesID; old code
    //foreach ($pagesID as $pageID){  old code
        //echo "the page ". $pageID['id']; old code
    }
    //} old code
    ?>
    <?php
    function checkTitle(){
        $ID = checkID();
        if  ($ID == 1) {
            $wel =  "Welcome";
            return $wel;
        }
        elseif ($ID == 2){
            $my_H = 'My Hobbies';
            return $my_H;
        }
        elseif ($ID == 3){
            $abo = "About";
            return $abo;
        }
        elseif ($ID == 4){
            $my_D = "My Dream Vacation";
            return $my_D;
        }
        else{
            $my_F = "My Favorite Movie";
            return $my_F;
            
        }

    }
    function pageSelector(){
        $ID = checkID();
        if  ($ID ==  1) {
            $WelcomePage ="<p> . Hello and welcome!

            It's great to have you here. Whether you're a first-time visitor or a returning guest, we're thrilled to have the opportunity to connect with you.
            
            We're here to help and assist you with any questions or concerns you may have, and to make sure your experience with us is both enjoyable and rewarding.
            
            Thank you for choosing to spend your time with us. We hope you'll find what you're looking for and that you'll come back often to connect, learn, and grow. </p>";
             return $WelcomePage;
        }
         elseif  ($ID ==  2) {
            $WelcomePage = "<p>My hobbies include reading, playing video games, and karate.

             I prefer to read fantasy novels, and the Lord of the Rings and the Hobbit by JRR Tolkien are two of my all-time favorites. I am also a fan of the Discworld novels of Terry Pratchett and the Shannara novels of Terry Brooks.
             
             Some of my current favorites are the Nightside books by Simon R. Green and the Caiphas Cain novels by Sandy Mitchell.
             
             On the topic of video games, my first video game console was an Atari 2600. I used to play games like Combat, River Raid, and Pac-man. After that we got a Nintendo Entertainment System. I used to play Mario Bros., Battletoads, Zelda, Metroid. To be honest, I can't remember all the games I've played on the NES.
             
             We also owned an Apple IIe and I used to play games on that as well. I played my first RPG on that computer. It was Ultima II: Revenge of the Enchantress. It was my first taste of RPGs and that has been my favorite genre since. I used to play Bard's Tale, Zork, The Hitchhiker's Guide to the Galaxy, and Wizardry.
             
             Currently I own an Xbox One and a Nintendo Switch. My favorite games are still RPGs, but they are more action RGPs than traditional RPGs. I really like the Borderlands series, as you have probably seen from the decor in my office. Breath of the Wild is also a great addition to the Zelda series.
             
             I have studied karate for around 20 years now. I did take a short break for Covid and an foot injury. It is rather difficult to study karate when you are supposed to stay 6 feet away from people. Also, when you doctor says that you shouldn't even walk up steep hills, then maybe kicking someone in the head isn't such a good idea. </p>";
             return $WelcomePage;
         }
         elseif  ($ID ==  3) {
            $WelcomePage = "<p> I've talked about my hobbies. What else should I say?

             I went to USU for my bachelor's degree. I got my degree in Business Information Systems. I then started working as a developer. While working as a developer USU decided that they should change the name of the department from Business to Management Information Systems. So, when I returned for my Master's degree, it was in Management Information Systems. While I was working on my Master's Degree, my professors kept asking if I was going to do a PhD as well. So, I did.
             
             My PhD isn't in Management Information Systems though. At the time, there wasn't an option to do a PhD in the College of Business. So, my PhD is in Education with an emphasis in Management Information Systems. </p>";
             return $WelcomePage;
         }
         elseif  ($ID ==  4) {
            $WelcomePage = "<p> I'm trying to think about my dream vacation. There are a few places that I'd like to visit. Japan and Italy. I'm a nerd and Japan is nerd Mecca. I've already visited Japan. I went there in 2018.

             Italy is a weird choice when you think about it. Why Italy and Japan? Well, I served a mission in Italy. So, I lived there for two years. I did get to do quite a few touristy things. My family also came before I left to come home. So, we toured around for about a week and a half.
             
             I would like to go back. I thoroughly enjoyed visiting both places. </p>";
             return $WelcomePage;
         }
         elseif  ($ID ==  5) {
            $WelcomePage = "";
             return $WelcomePage;
        }
       else{
        $WelcomePage = "<p> . THAT IS NOT GOOD</p>";
        return $WelcomePage;
    }
    }



    ?>