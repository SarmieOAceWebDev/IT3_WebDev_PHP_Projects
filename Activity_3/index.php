<?php
declare(strict_types=1);
$viewerAge = 10; 
$planType = "ULTRA"; 
$isStudent = TRUE;
$monthlyBase = 400.00; 

if ($viewerAge < 13) die ("Access Denied: Age Restriction");


switch ($planType) {
   
    case "Standard": $resolution = " (1080p)FULL HD."; 
    break;
    case "ULTRA": $resolution = "4K Ultra HD."; 
    break;
    case "Basic": $resolution = "(720p) HD."; 
    break;
    default: $resolution = "Unknown";
} 

$monthlyDiscount = ($isStudent || $planType === "Basic") ? 0.15 : 0.0;





   


    






    






/**
 * 

 * TICKET #003-C: STREAMING MEDIA & CONTENT ENGINE
 * Assignee: Junior Software Engineer (Block C)
 * * 📝 INSTRUCTIONS:
 * 1. Enable Strict Typing[cite: 50, 104].
 * 2. Define variables: $viewerAge (int), $planType (string), $isStudent (bool), $monthlyBase (float).
 * 3. Implement Content Filter (Guard Clause) for age < 13.
 * 4. Implement Tier-Based Resolution using a switch.
 * 5. Implement Promo Engine using a Ternary Operator.
 * 6. Use Alternative Loop Syntax for the Playlist UI.
 */

// START YOUR PHP LOGIC HERE
// -------------------------------------------------------------------------


// -------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamFlow Media - Ticket #003-C</title>
    <style>
        :root { 
            --accent-red: #e50914; 
            --dark-bg: #141414; 
            --card-bg: #181818; 
            --text-light: #ffffff;
        }

        body { 
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
            background-color: var(--dark-bg); 
            color: var(--text-light); 
            margin: 0; 
            padding: 40px;
        }

        .dashboard { max-width: 1000px; margin: auto; display: grid; grid-template-columns: 1fr 1fr; gap: 25px; }
        
        .box { 
            background: var(--card-bg); 
            padding: 30px; 
            border-radius: 8px; 
            border-bottom: 3px solid #333; 
        }

        .full { grid-column: span 2; }
        
        h2 { color: var(--accent-red); font-size: 1.1em; margin-top: 0; text-transform: uppercase; }

         .data-row { 
            display: flex; 
            justify-content: space-between; 
            padding: 12px 0; 
            border-bottom: 1px solid #222; 
        }

        .label { color: #808080; font-weight: bold; font-size: 0.9em; }

        .playlist-grid { 
            display: grid; 
            grid-template-columns: repeat(4, 1fr); 
            gap: 15px; 
            margin-top: 20px; 
        }
  .movie-card { 
            background: #2f2f2f; 
            height: 120px; 
            border-radius: 4px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 0.8em;
            color: #aaa;
            border: 1px solid #444;
        }

        .access-badge {
            padding: 15px;
            text-align: center;
            border-radius: 4px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .granted { background: rgba(39, 174, 96, 0.2); color: #2ecc71; border: 1px solid #27ae60; }
        .denied { background: rgba(229, 9, 20, 0.1); color: var(--accent-red); border: 1px solid var(--accent-red); }

        .console { 
            background: #000; 
            color: #00ff00; 
            padding: 15px; 
            border-radius: 4px; 
            font-family: 'Courier New', monospace; 
            font-size: 0.8em; 
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <div class="box">
            <h2>Account Overview</h2>
            <div class="data-row">
                <span class="label">Plan Tier:</span>
                <span><?php echo $planType; ?></span>
            </div>
            <div class="data-row">
                <span class="label">Resolution:</span>
                <span><?php echo $resolution;    ?></span>
            </div>
            <div class="data-row">
                <span class="label">Viewer Age:</span>
                <span><?php echo $viewerAge; ?></span>
            </div>
        </div>

        <div class="box">
            <h2>Subscription Billing</h2>
            <div class="data-row">
                <span class="label">Base Rate:</span>
                <span>₱<?php echo $monthlyBase; ?></span>
            </div>
            <div class="data-row">
                <span class="label">Promo Discount:</span>
                <span style="color: #2ecc71;"><?php echo $isStudent ? "15%" : "0%"; ?></span>
            </div>
 <div class="data-row" style="border: none; margin-top: 10px;">
                <span class="label" style="color: #fff;">Monthly Total:</span>
                <span style="font-size: 1.5em; font-weight: bold;">₱<?php echo $isStudent ? $monthlyBase * 0.8 : $monthlyBase; ?></span>
            </div>
        </div>

        <div class="box full">
            <h2>Recommended for You (Batch #8)</h2>
            <div class="playlist-grid">
                <?php 
                    // STUDENT: Implement FOR LOOP with ALTERNATIVE SYNTAX here
                    // Generate 8 movie cards
                    for ($i = 1; $i <= 8; $i++) {
                        echo '<div class="movie-card">Movie#' . $i . '</div>';
                    }
                ?>
            </div>
        </div>

        <div class="box">
            <h2>Premium Early Access</h2>
            <div class="access-badge"><?php 
                if ($planType === "ULTRA" && $viewerAge >= 18) {
                echo "Access Granted";
                } elseif ($planType === "Standard" && $isStudent) {
                echo "Access Granted:";
                } else {
                echo "Access Denied";
                }
            ?>
            </div>
        </div>
        <div class="box">
            <h2>Developer Console</h2>
            <div class="console">
                <?php 
                    // STUDENT: Implement WHILE LOOP for 3 buffer steps
                    $bufferSteps = 3;
                    $currentStep = 1;
                    while ($currentStep <= $bufferSteps):
                        echo "System Loading $currentStep<br>";
                        $currentStep++;
                    endwhile;

                ?>
                <div style="margin-top: 10px; border-top: 1px solid #333; padding-top: 10px;">
                    > PRICE_SPACESHIP (Base vs 500): <?php
                    echo $monthlyBase > 500 ? "Base is higher than 500" : "Base is less than or equal to 500";
                    ?>
                </div>
                <div>
                    > IDENTITY_CHECK (1 === true): <?php echo 1 === true ? "True" : "False"; ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>