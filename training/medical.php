<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Medical',
    description: 'How to save lives in combat and help your squad complete the mission.',
);

begin_page($meta);
?>
<section>
    <h2 id='priorities'>Priorities</h2>

    <div class='icons-horizontal'>
        <div>
            <h5>1.&nbsp;Safety</h5>
            <img src='/img/icons/target.svg'>
            <p>Deal with enemy.</p>
            <p>Get to hard cover.</p>
        </div>
        <div>
            <h5>2.&nbsp;Triage</h5>
            <img src='/img/icons/medkit.svg'>
            <p>Check injuries.</p>
            <p>Tourniquet limbs.</p>
        </div>
        <div>
            <h5>3.&nbsp;Report</h5>
            <img src='/img/icons/radio.svg'>
            <p>Report condition clearly.</p>
            <p>Request medical if serious.</p>
        </div>
        <div>
            <h5>4.&nbsp;Assist</h5>
            <img src='/img/icons/shield.svg'>
            <p>Hold the perimeter.</p>
            <p>Assist fallen comrades.</p>
        </div>
    </div>

    <div class='banner-container'>
        <div class='clr-red'>
            Secure the area or drag casualties to a safe position before treating!
        </div>
    </div>
</section>

<section class='wide'>
    <h2 id='triage'>Triage</h2>

    <div class='colour-blocks'>
        <div class='clr-green'>
            <div class='header'>
                <h5>Minimal</h5>
                <p>Fight on, soldier!</p>
            </div>
            <ul>
                <li>Minor wounds to a single limb.</li>
                <li>Bleeding has been stopped.</li>
                <li>Normal blood pressure.</li>
                <li>Normal heart rate.</li>
                <li>Minor pain.</li>
                <li>Remained conscious.</li>
            </ul>
        </div>
        <div class='clr-orange'>
            <div class='header'>
                <h5>Delayed</h5>
                <p>War is hell!</p>
            </div>
            <ul>
                <li>Serious wounds to one limb.</li>
                <li>Minor wounds to head or torso.</li>
                <li>Bleeding has stopped.</li>
                <li>Normal blood pressure.</li>
                <li>Normal heart rate.</li>
                <li>Temporarily unconscious.</li>
            </ul>
        </div>
        <div class='clr-red'>
            <div class='header'>
                <h5>Immediate</h5>
                <p>Requesting MEDEVAC!</p>
            </div>
            <ul>
                <li>Serious wounds to multiple limbs.</li>
                <li>Serious wounds to head or torso.</li>
                <li>Bleeding can not be stopped.</li>
                <li>Low blood pressure.</li>
                <li>Low or high heart rate.</li>
                <li>Remained unconscious.</li>
            </ul>
        </div>
        <div class='clr-black'>
            <div class='header'>
                <h5>Expectant</h5>
                <p>He's dead, Jim! Almost.</p>
            </div>
            <ul>
                <li>Serious wounds to every limb.</li>
                <li>Serious wounds to head or torso.</li>
                <li>Bleeding can not be stopped.</li>
                <li>Very low blood pressure.</li>
                <li>Is or was in cardiac arrest.</li>
                <li>Remained unconscious.</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <h2 id='wounds'>Wounds</h2>

    <table class='dictionary'>
        <tr>
            <td>Abrasion</td>
            <td>Minor scrape that has removed layers of skin and may bleed minimally.</td>
        </tr>
        <tr>
            <td>Avulsion</td>
            <td>Serious wound involving the loss of a chunk of flesh, with significant bleeding.</td>
        </tr>
        <tr>
            <td>Contusion </td>
            <td>Light bruising of the affected area. Minor injury that does not bleed.</td>
        </tr>
        <tr>
            <td>Crush wound</td>
            <td>Significant bruising and possible bone fractures, often alongside other wounds.</td>
        </tr>
        <tr>
            <td>Cut</td>
            <td>Deep cut with a straight edge that will bleed profusely until treated.</td>
        </tr>
        <tr>
            <td>Laceration</td>
            <td>Similar to a cut, but jagged edges make it harder to close the wound.</td>
        </tr>
        <tr>
            <td>Puncture</td>
            <td>Serious wound from penetration by a sharp object, with significant bleeding.</td>
        </tr>
        <tr>
            <td>Velocity</td>
            <td>Similar to a puncture, but includes an exit wound that makes it harder to close.</td>
        </tr>
    </table>
</section>

<section>
    <h2 id='bandages'>Bandages</h2>

    <div class='text-blocks'>
        <div>
            <h5>Elastic bandage</h5>
            <ul>
                <li>Affected area wrapped in elasticated bandages.</li>
                <li>Best for minor injuries or as a temporary measure.</li>
                <li>Bleeding wounds will quickly saturate and reopen.</li>
                <li>Excellent coverage of multiple wounds.</li>
            </ul>
        </div>
        <div>
            <h5>Field Dressing</h5>
            <ul>
                <li>Padded bandage tied to affected area.</li>
                <li>Best at light wounds or when other choices limited.</li>
                <li>Serious wounds will quickly saturate and reopen.</li>
                <li>Mediocre coverage of multiple wounds.</li>
            </ul>
        </div>
        <div>
            <h5>Packing Bandage</h5>
            <ul>
                <li>Cavity packed with material to stop bleeding.</li>
                <li>Best used for puncture and velocity wounds.</li>
                <li>Minor wounds less likely to require surgery.</li>
                <li>Poor coverage of multiple wounds.</li>
            </ul>
        </div>
        <div>
            <h5>QuikClot</h5>
            <ul>
                <li>Clotting agent applied to stop bleeding.</li>
                <li>Best used when surgery not imminent.</li>
                <li>Serious wounds will likely require surgery.</li>
                <li>Good coverage of multiple wounds.</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <h2 id='vitals'>Vitals</h2>

    <div class='icon-text-rows'>
        <div>
            <img src='/img/icons/vitals.svg'>
            <div class='text'>
                <h5>Heart Rate</h5>
                <ul class='no-bullets'>
                    <li>A good pulse is in the range of 70 to 130.</li>
                    <li>A pulse below 20 or above 200 will lead to cardiac arrest.</li>
                    <li>Never give morphine to a patient with a pulse lower than 70.</li>
                </ul>
            </div>
        </div>
        <div>
            <img src='/img/icons/drop.svg'>
            <div class='text'>
                <h5>Blood Pressure</h5>
                <ul class='no-bullets'>
                    <li>A good blood pressure is between 100/60 and 120/80.</li>
                    <li>Use IV bags to increase a patient’s blood pressure.</li>
                    <li>Blood pressure will slowly rise on its own over time.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class='banner-container'>
        <div class='clr-red'>
            Take care when treating vitals. Heart rate and blood pressure are interlinked.
        </div>
    </div>
</section>

<section>
    <h2 id='medication'>Medication</h2>

    <div class='text-blocks'>
        <div>
            <h5>Morphine</h5>
            <ul>
                <li>Reduces heavy pain and lowers the heart rate.</li>
                <li>Should never be given to a patient with a low heart rate or blood pressure.</li>
                <li>Never use morphine without accurate vitals!</li>
                <li>Pain relief from morphine is temporary.</li>
                <li>Does not directly impact consciousness.</li>
            </ul>
        </div>
        <div>
            <h5>Epinephrine</h5>
            <ul>
                <li>Increases the heart rate and blood pressure.</li>
                <li>Should never be given to a patient with a high heart rate or blood pressure.</li>
                <li>Do not assume epinephrine is required following morphine. Wait for vitals to settle first.</li>
                <li>Does not directly impact consciousness.</li>
            </ul>
        </div>
    </div>

    <div class='banner-container'>
        <div class='clr-red'>
            The generic vital readings used by non-medical personnel must NEVER be used to determine if it is safe to use medication. For example, a "normal" pulse can be dangerously low 45&nbsp;BPM!
        </div>
    </div>
</section>

<section>
    <h2 id='treatments'>Treatments</h2>

    <div class='text-blocks'>
        <div>
            <h5>Tourniquets</h5>
            <ul>
                <li>Applied to limbs to prevent rapid blood loss.</li>
                <li>Intended as a temporary emergency measure.</li>
                <li>Causes ever increasing pain while applied.</li>
                <li>Remove as soon as open wounds are bandaged.</li>
            </ul>
        </div>
        <div>
            <h5>CPR</h5>
            <ul>
                <li>Performed on a casualty in cardiac arrest.</li>
                <li>Not guaranteed to be successful. Repeat as required until pulse recovers.</li>
                <li>Performing CPR generates a fake pulse.</li>
                <li>Causes of cardiac arrest must still be treated!</li>
            </ul>
        </div>
        <div>
            <h5>Surgery</h5>
            <ul>
                <li>Stitches wounds, preventing them reopening.</li>
                <li>Casualty must be in a stable condition.</li>
                <li>Can only be performed by a Corpsman.</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <h2 id='medevac'>MEDEVAC</h2>

    <div class='icons-horizontal'>
        <div>
            <h5>1.&nbsp;Assess</h5>
            <img src='/img/icons/medkit.svg'>
            <p>Triage the casualty.</p>
            <p>Assess the situation.</p>
        </div>
        <div>
            <h5>2.&nbsp;Position</h5>
            <img src='/img/icons/position.svg'>
            <p>Move away from threats.</p>
            <p>Mark location as "CCP".</p>
        </div>
        <div>
            <h5>3.&nbsp;Request</h5>
            <img src='/img/icons/radio.svg'>
            <p>Request MEDEVAC to CCP.</p>
            <p>Specify casualty's status.</p>
        </div>
        <div>
            <h5>4.&nbsp;Help</h5>
            <img src='/img/icons/ambulance.svg'>
            <p>Hold the position.</p>
            <p>Load the casualty.</p>
        </div>
    </div>
</section>

<section>
    <h2 id='stamina'>Stamina</h2>

    <div class='icon-text-blocks'>
        <div>
            <img src='/img/icons/muscle.svg'>
            <div class='text'>
                <h5>Anaerobic Energy</h5>
                <ul class='no-bullets'>
                    <li>Short-term stamina reserve.</li>
                    <li>Drains rapidly when sprinting.</li>
                    <li>Recovers rapidly when resting.</li>
                    <li>Limits maximum running time.</li>
                    <li>Represented by the stamina bar.</li>
                    <li>Factored into breathing audio.</li>
                </ul>
            </div>
        </div>
        <div>
            <img src='/img/icons/lungs.svg'>
            <div class='text'>
                <h5>Aerobic Energy</h5>
                <ul class='no-bullets'>
                    <li>Long-term stamina reserve.</li>
                    <li>Drains slowly when jogging.</li>
                    <li>Recovers very slowly when resting.</li>
                    <li>Limits maximum running speed.</li>
                    <li>Not represented by the stamina bar.</li>
                    <li>Factored into breathing audio.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class='banner-container'>
        <div class='clr-red'>
            The stamina bar is not a reliable indicator of total stamina or stamina recovery.
        </div>
    </div>
</section>

<section>
    <h2 id='fatigue'>Fatigue</h2>

    <div class='icon-text-blocks'>
        <div>
            <img src='/img/icons/terrain.svg'>
            <div class='text'>
                <h5>Gradual Factors</h5>
                <ul class='no-bullets'>
                    <li>Stance and movement speed.</li>
                    <li>Raised or lowered weapon.</li>
                    <li>Terrain and temperature.</li>
                </ul>
            </div>
        </div>
        <div>
            <img src='/img/icons/energy.svg'>
            <div class='text'>
                <h5>Long-Term Effects</h5>
                <ul class='no-bullets'>
                    <li>Reduction in maximum stamina.</li>
                    <li>Reduction in maximum speed.</li>
                    <li>Reduction in stamina recovery.</li>
                </ul>
            </div>
        </div>
        <div>
            <img src='/img/icons/weight.svg'>
            <div class='text'>
                <h5>Immediate Factors</h5>
                <ul class='no-bullets'>
                    <li>Weight of gear carried.</li>
                    <li>Carrying or dragging objects.</li>
                    <li>Pain and low blood volume.</li>
                </ul>
            </div>
        </div>
        <div>
            <img src='/img/icons/fatigue.svg'>
            <div class='text'>
                <h5>Short-Term Effects</h5>
                <ul class='no-bullets'>
                    <li>Unable to sprint or jog.</li>
                    <li>Black flashing at edge of vision.</li>
                    <li>Increased weapon sway.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class='banner-container'>
        <div class='clr-red'>
            Some fatigue influences, such as pain, have a large impact until treated.
        </div>
    </div>
</section>

<section>
    <h2 id='what-not-to-do'>What Not To Do</h2>

    <iframe class='emb-yt' width="560" height="315" src="https://www.youtube-nocookie.com/embed/SgPQ6W0lnpU" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
<?php
end_page($meta);

// EOF

