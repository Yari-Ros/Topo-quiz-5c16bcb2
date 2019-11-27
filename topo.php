<?php
$countries =  array
('nederland?' => "amsterdam" ,
'FUCK IM BOUTTA' => "COOM",
'reddit good or bad' => "bad",
'yo momma' => "yo momn't",
'je hoofd' => "je hoofd.");
$score = 0;
foreach ($countries as $land =>$stad) {
 echo $land .PHP_EOL;
 $antwoord = readline ("");
  if ($antwoord == $stad){
    echo "eh, you got it, consider yourself a special snowflake." .PHP_EOL;
    $score++;
    }
  else {
    echo "You are living proof that Christ's death was in vain. You embody all of the worst aspects of our gluttonous and proudly ignorant culture. People like you are the reason why democracy fails, and you don't even care. As long as you can keep shoveling more processed, high fructose garbage into your septic maw, you will gladly continue to take more and more while the world rots around you. You are a pig, consuming and polluting while producing nothing but, and you still have the gall to talk like you think you have something to say that's worth listening to? Your every affectation is cringeworthy. Your intellectual musings are a lamentable pretense which fool nobody but yourself. Your dime store philosophy is merely the paraphrased and regurgitated quotes of so-called thinkers who's apparent eloquence you wish would rub off onto you. Just stop trying to sound smart, because you're not. You are a moron, and deep down, in the pit of your hollow, cavernous being, you know that to be true. So do the world and yourself a favor and glue your mouth shut before you embarrass yourself any further. The space you occupy is wasted. The greatest contribution a worthless fool like you could ever make to the human race is if you removed yourself from the gene pool. Even considering how slim the odds are that you would ever actually couple with a member of the opposite sex in a nauseating spectacle of groaning and sweaty, venous meat rubbing to produce offspring, the thought of you infecting the world with your vermin progeny is a loathsome prospect. If there were such a thing as a just God, he wouldn't even allow you to have children. He would scrub you from the Earth's surface like the Cheeto grease from your fingers before you even got the chance. That's all you deserve, you bloated, sweaty blob of cellulite and body hair. You two-legged sow. You make me sick. If I could, I wouldn't even acknowledge your existence, but everything about you,from your stench and ghastly visage, to your contemptible mockery of a sense of morality, offends me to the very core of my being. I hate every aspect of your person. The mere knowledge that you exist makes my life tangibly worse, and I wish I could purge that knowledge from my mind. You are the worst thing to ever come seeping from that putrid gash between your mother's hocks. I hope your entire family drowns, and your pets too." .PHP_EOL;
  }
  }
echo "Je hebt " .$score ." van de " . count($countries) . " goed!";