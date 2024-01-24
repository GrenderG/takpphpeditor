<form name="npc_edit" method="post"
      action="index.php?editor=npc&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcid ?>&action=2">
    <div class="edit_form">
        <div class="edit_form_header">Edit NPC <?= $npcid ?></div>
        <div class="edit_form_content_small">
            <div class="center">
                <fieldset style="text-align: left;">
                    <legend><strong><span style="font-size: 18px;">General</span></strong></legend>
                    <input type="hidden" name="id" value="<?= $npcid ?>">
                    <table style="width: 100%;">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="name">NPC Name:</label><br/>
                                <input type="text" id="name" name="name" size="40" value="<?= $name ?? "" ?>"><br/><br/>
                                <label for="lastname">Title:</label><br/>
                                <input type="text" id="lastname" name="lastname" size="40"
                                       value="<?= $lastname ?? "" ?>"><br/><br/>
                                <label for="level">Level:</label><br/>
                                <input type="text" id="level" name="level" size="10" value="<?= $level ?>"><br/><br/>
                                <label for="maxlevel">Max Level:</label><br/>
                                <input type="text" id="maxlevel" name="maxlevel" size="10"
                                       value="<?= $maxlevel ?? "" ?>"><br/><br/>
                            </td>
                            <td style="vertical-align: top;">
                                <label for="race">Race:</label><br/>
                                <select id="race" name="race" style="width: 265px;">
                                    <?php foreach ($races as $key => $value): ?>
                                        <option value="<?= $key ?>"<?php echo ($key == $race) ? " selected" : ""; ?>><?= $key ?>
                                            : <?= $value ?></option>
                                    <?php endforeach; ?>
                                </select><br/><br/>
                                <label for="class">Class:</label><br/>
                                <select id="class" name="class" style="width: 265px;">
                                    <?php foreach ($classes as $key => $value): ?>
                                        <option value="<?= $key ?>"<?php echo ($key == $class) ? " selected" : ""; ?>><?= $key ?>
                                            : <?= $value ?></option>
                                    <?php endforeach; ?>
                                </select><br/><br/>
                                <label for="bodytype">Bodytype:</label><br/>
                                <select id="bodytype" name="bodytype" style="width: 265px;">
                                    <?php foreach ($bodytypes as $key => $value): ?>
                                        <option value="<?= $key ?>"<?php echo ($key == $bodytype) ? " selected" : ""; ?>><?= $key ?>
                                            : <?= $value ?></option>
                                    <?php endforeach; ?>
                                </select><br/><br/>
                                <label for="gender">Gender:</label><br/>
                                <select id="gender" name="gender">
                                    <?php foreach ($genders as $key => $value): ?>
                                        <option value="<?= $key ?>"<?php echo ($key == $gender) ? " selected" : ""; ?>><?= $value ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <br/>
            </div>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Vitals</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="hp">HP:</label> <br/>
                            <input type="text" id="hp" name="hp" size="10" value="<?= $hp ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="mana">Mana:</label> <br/>
                            <input type="text" id="mana" name="mana" size="10" value="<?= $mana ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="AC">AC:</label> <br/>
                            <input type="text" id="AC" name="AC" size="10" value="<?= $AC ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="ATK">+ATK:</label> <br/>
                            <input type="text" id="ATK" name="ATK" size="10" value="<?= $ATK ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="runspeed">Runspeed:</label><br/>
                            <input type="text" id="runspeed" name="runspeed" size="10" value="<?= $runspeed ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="walkspeed">Walkspeed:</label> <br>
                            <input type="text" id="walkspeed" name="walkspeed" size="10"
                                   value="<?= $walkspeed ?? "" ?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; text-align: left;">
                            <label for="scalerate">Scalerate:</label><br/>
                            <input type="text" id="scalerate" name="scalerate" size="10"
                                   value="<?= $scalerate ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="see_invis">See Invis:</label><br/>
                            <input type="text" id="see_invis" name="see_invis" size="10"
                                   value="<?= $see_invis ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="see_invis_undead">See ITU:</label> <br/>
                            <input type="text" id="see_invis_undead" name="see_invis_undead" size="10"
                                   value="<?= $see_invis_undead ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="see_sneak">See Sneak:</label><br/>
                            <input type="text" id="see_sneak" name="see_sneak" size="10"
                                   value="<?= $see_sneak ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="see_improved_hide">See IH:</label> <br/>
                            <input type="text" id="see_improved_hide" name="see_improved_hide" size="10"
                                   value="<?= $see_improved_hide ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="exp_pct">Exp %:</label> <br/>
                            <input type="text" id="exp_pct" name="exp_pct" size="10" value="<?= $exp_pct ?? "" ?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; text-align: left;">
                            <label for="hp_regen_rate">HP Regen:</label> <br/>
                            <input type="text" id="hp_regen_rate" name="hp_regen_rate" size="10"
                                   value="<?= $hp_regen_rate ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="combat_hp_regen">Combat HP Regen:</label><br/>
                            <input type="text" id="combat_hp_regen" name="combat_hp_regen" size="10"
                                   value="<?= $combat_hp_regen ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="mana_regen_rate">MP Regen:</label> <br/>
                            <input type="text" id="mana_regen_rate" name="mana_regen_rate" size="10"
                                   value="<?= $mana_regen_rate ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">
                            <label for="combat_mana_regen">Combat MP Regen:</label><br/>
                            <input type="text" id="combat_mana_regen" name="combat_mana_regen" size="10"
                                   value="<?= $combat_mana_regen ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left;">&nbsp;</td>
                        <td style="padding: 3px; text-align: left;">&nbsp;</td>
                    </tr>
                </table>
            </fieldset>
            <br/>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Stats</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 14%">
                            <label for="STR">STR:</label><br/>
                            <input type="text" id="STR" name="STR" size="5" value="<?= $STR ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%">
                            <label for="STA">STA:</label><br/>
                            <input type="text" id="STA" name="STA" size="5" value="<?= $STA ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%">
                            <label for="DEX">DEX:</label><br/>
                            <input type="text" id="DEX" name="DEX" size="5" value="<?= $DEX ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%">
                            <label for="AGI">AGI:</label><br/>
                            <input type="text" id="AGI" name="AGI" size="5" value="<?= $AGI ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%">
                            <label for="_INT">INT:</label><br/>
                            <input type="text" id="_INT" name="_INT" size="5" value="<?= $_INT ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 15%">
                            <label for="WIS">WIS:</label><br/>
                            <input type="text" id="WIS" name="WIS" size="5" value="<?= $WIS ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 15%">
                            <label for="CHA">CHA:</label><br/>
                            <input type="text" id="CHA" name="CHA" size="5" value="<?= $CHA ?? "" ?>">
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br/>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Resists</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px;" colspan="7">1 Resist = 0.5%<br/>200 Resist = 100%</td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 20%"><label for="MR">MR:</label> <br/>
                            <input type="text" id="MR" name="MR" size="5" value="<?= $MR ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 20%"><label for="CR">CR:</label> <br/>
                            <input type="text" id="CR" name="CR" size="5" value="<?= $CR ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 20%"><label for="FR">FR:</label> <br/>
                            <input type="text" id="FR" name="FR" size="5" value="<?= $FR ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 20%"><label for="PR">PR:</label> <br/>
                            <input type="text" id="PR" name="PR" size="5" value="<?= $PR ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 20%"><label for="DR">DR:</label> <br/>
                            <input type="text" id="DR" name="DR" size="5" value="<?= $DR ?? "" ?>">
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br/>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Combat</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="mindmg">Min Dmg:</label> <br/>
                            <input type="text" id="mindmg" name="mindmg" size="5" value="<?= $mindmg ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="maxdmg">Max Dmg:</label> <br/>
                            <input type="text" id="maxdmg" name="maxdmg" size="5" value="<?= $maxdmg ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="attack_delay">Atk Delay:</label>
                            <br/>
                            <input type="text" id="attack_delay" name="attack_delay" size="5"
                                   value="<?= $attack_delay ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="aggroradius">Aggroradius:</label>
                            <br/>
                            <input type="text" id="aggroradius" name="aggroradius" size="5"
                                   value="<?= $aggroradius ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="assistradius">Assistradius:</label><br/>
                            <input type="text" id="assistradius" name="assistradius" size="5"
                                   value="<?= $assistradius ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="ignore_distance">Ignore Distance:</label>
                            <br/><input type="text" id="ignore_distance" name="ignore_distance"
                                        size="5"
                                        value="<?= $ignore_distance ?? "" ?>">
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="healscale">Heal
                                Scale:</label> <br/><input
                                    type="text" id="healscale"
                                    name="healscale"
                                    size="5"
                                    value="<?= $healscale ?? "" ?>">%
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="spellscale">Spell
                                Scale:</label>
                            <br/><input type="text" id="spellscale"
                                        name="spellscale"
                                        size="5"
                                        value="<?= $spellscale ?? "" ?>">%
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="slow_mitigation">Slow
                                Mit:</label>
                            <br/><input type="text" id="slow_mitigation"
                                        name="slow_mitigation" size="5"
                                        value="<?= $slow_mitigation ?? "" ?>">%
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="Accuracy">+Accuracy:</label>
                            <br/><input
                                    type="text" id="Accuracy" name="Accuracy"
                                    size="5"
                                    value="<?= $Accuracy ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label
                                    for="avoidance">+Avoidance:</label> <br/><input
                                    type="text" id="avoidance" name="avoidance"
                                    size="5"
                                    value="<?= $avoidance ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="attack_count">Attack
                                Count:</label><br/><input type="text" id="attack_count" name="attack_count" size="5"
                                                          value="<?= $attack_count ?? "" ?>">
                        </td>
                    </tr>
                </table>
                <div class="center">
                    <table>
                        <tr>
                            <?php
                            $specabil = array();
                            $specabilcont = array();

                            for ($i = 1; $i <= $max_special_ability; $i++) {
                                $specabilcont[$i] = '';

                                if (preg_match("/^$i,/", $special_abilities ?? "") == 1) {
                                    $specabil[$i] = 1;
                                    // Leading special ability
                                    if (preg_match("/^$i,.+?\^/", $special_abilities ?? "", $match) == 1) {
                                        $specabilcont[$i] = $match[0];
                                        $specabilcont[$i] = rtrim($specabilcont[$i], "^");
                                    } // Only special ability
                                    else {
                                        preg_match("/^$i,.+?\$/", $special_abilities ?? "", $match);
                                        $specabilcont[$i] = $match[0];
                                    }
                                } elseif (preg_match("/\^$i,/", $special_abilities ?? "") == 1) {
                                    $specabil[$i] = 1;
                                    // Middle special ability
                                    if (preg_match("/\^$i,.+?\^/", $special_abilities ?? "", $match) == 1) {
                                        $specabilcont[$i] = $match[0];
                                        $specabilcont[$i] = trim($specabilcont[$i], "^");
                                    } // Trailing special ability
                                    else {
                                        preg_match("/\^$i,.+?\$/", $special_abilities ?? "", $match);
                                        $specabilcont[$i] = $match[0];
                                        $specabilcont[$i] = ltrim($specabilcont[$i], "^");
                                    }
                                } else {
                                    $specabil[$i] = 0;
                                }
                            }
                            ?>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <label for="summon">Summon (1):</label><br/><input type="text" id="summon" name="1"
                                                                                   size="10"
                                                                                   value="<?= $specabilcont[1] ?>"><br/>
                                <label for="enrage">Enrage (2):</label><br/><input type="text" id="enrage" name="2"
                                                                                   size="10"
                                                                                   value="<?= $specabilcont[2] ?>"><br/>
                                <label for="rampage">Rampage (3):</label><br/><input type="text" id="rampage" name="3"
                                                                                     size="10"
                                                                                     value="<?= $specabilcont[3] ?>"><br/>
                                <label for="ae_rampage">AE Rampage (4):</label><br/><input type="text" id="ae_rampage"
                                                                                           name="4" size="10"
                                                                                           value="<?= $specabilcont[4] ?>"><br/>
                                <label for="flurry">Flurry (5):</label><br/><input type="text" id="flurry" name="5"
                                                                                   size="10"
                                                                                   value="<?= $specabilcont[5] ?>"><br/>
                                <label for="ranged_attack">Ranged Attack (11):</label><br/><input type="text"
                                                                                                  id="ranged_attack"
                                                                                                  name="11" size="10"
                                                                                                  value="<?= $specabilcont[11] ?>"><br/>
                                <label for="tunnel_vision">Tunnel Vision (29):</label><br/><input type="text"
                                                                                                  id="tunnel_vision"
                                                                                                  name="29" size="10"
                                                                                                  value="<?= $specabilcont[29] ?>"><br/>
                                <label for="leashed">Leashed (32):</label><br/><input type="text" id="leashed" name="32"
                                                                                      size="10"
                                                                                      value="<?= $specabilcont[32] ?>"><br/>
                                <label for="tethered">Tethered (33):</label><br/><input type="text" id="tethered"
                                                                                        name="33" size="10"
                                                                                        value="<?= $specabilcont[33] ?>"><br/>
                                <label for="flee_percent">Flee Percent (37):</label><br/><input type="text"
                                                                                                id="flee_percent"
                                                                                                name="37" size="10"
                                                                                                value="<?= $specabilcont[37] ?>"><br/>
                                <label for="chase_distance">Chase Distance (40):</label><br/><input type="text"
                                                                                                    id="chase_distance"
                                                                                                    name="40" size="10"
                                                                                                    value="<?= $specabilcont[40] ?>"><br/>
                                <label for="corpse_camper">Corpse Camper (49):</label><br/><input type="text"
                                                                                                  id="corpse_camper"
                                                                                                  name="49" size="10"
                                                                                                  value="<?= $specabilcont[49] ?>"><br/>
                            </td>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <input type="checkbox" id="triple_attack" name="6"
                                       value="6,1^"<?php echo ($specabil[6] == 1) ? "checked" : ""; ?>>
                                <label for="triple_attack">Triple Attack</label><br/>
                                <input type="checkbox" id="innate_dual_wield" name="7"
                                       value="7,1^"<?php echo ($specabil[7] == 1) ? "checked" : ""; ?>>
                                <label for="innate_dual_wield">Innate Dual Wield</label><br/>
                                <input type="checkbox" name="10" id="magic_attack"
                                       value="10,1^"<?php echo ($specabil[10] == 1) ? "checked" : ""; ?>>
                                <label for="magic_attack">Magic Attack</label><br/>
                                <input type="checkbox" id="bane_attack" name="9"
                                       value="9,1^"<?php echo ($specabil[9] == 1) ? "checked" : ""; ?>>
                                <label for="bane_attack">Bane Attack</label><br/>
                                <input type="checkbox" id="do_not_equip_items" name="8"
                                       value="8,1^"<?php echo ($specabil[8] == 1) ? "checked" : ""; ?>>
                                <label for="do_not_equip_items">Do Not Equip Items</label><br/>
                                <input type="checkbox" id="unslowable" name="12"
                                       value="12,1^"<?php echo ($specabil[12] == 1) ? "checked" : ""; ?>>
                                <label for="unslowable">Unslowable</label><br/>
                                <input type="checkbox" id="reverse_slow" name="50"
                                       value="50,1^"<?php echo ($specabil[50] == 1) ? "checked" : ""; ?>>
                                <label for="reverse_slow">Reverse Slow</label><br/>
                                <input type="checkbox" id="immune_to_haste" name="51"
                                       value="51,1^"<?php echo ($specabil[51] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_haste">Immune to Haste</label><br/>
                                <input type="checkbox" id="unmezable" name="13"
                                       value="13,1^"<?php echo ($specabil[13] == 1) ? "checked" : ""; ?>>
                                <label for="unmezable">Unmezable</label><br/>
                                <input type="checkbox" id="uncharmable" name="14"
                                       value="14,1^"<?php echo ($specabil[14] == 1) ? "checked" : ""; ?>>
                                <label for="uncharmable">Uncharmable</label><br/>
                                <input type="checkbox" id="unstunable" name="15"
                                       value="15,1^"<?php echo ($specabil[15] == 1) ? "checked" : ""; ?>>
                                <label for="unstunable">Unstunable</label><br/>
                                <input type="checkbox" id="unsnareable" name="16"
                                       value="16,1^"<?php echo ($specabil[16] == 1) ? "checked" : ""; ?>>
                                <label for="unsnareable">Unsnareable</label><br/>
                                <input type="checkbox" id="unfearable" name="17"
                                       value="17,1^"<?php echo ($specabil[17] == 1) ? "checked" : ""; ?>>
                                <label for="unfearable">Unfearable</label><br/>
                                <input type="checkbox" id="unpacifiable" name="31"
                                       value="31,1^"<?php echo ($specabil[31] == 1) ? "checked" : ""; ?>>
                                <label for="unpacifiable">Unpacifiable</label><br/>
                                <input type="checkbox" id="immune_to_dispell" name="18"
                                       value="18,1^"<?php echo ($specabil[18] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_dispell">Immune to Dispell</label><br/>
                                <input type="checkbox" id="no_harm_from_players" name="35"
                                       value="35,1^"<?php echo ($specabil[35] == 1) ? "checked" : ""; ?>>
                                <label for="no_harm_from_players">No Harm from Players</label><br/>
                                <input type="checkbox" id="disable_melee" name="39"
                                       value="39,1^"<?php echo ($specabil[39] == 1) ? "checked" : ""; ?>>
                                <label for="disable_melee">Disable Melee</label><br/>
                                <input type="checkbox" id="use_warrior_skills" name="44"
                                       value="44,1^"<?php echo ($specabil[44] == 1) ? "checked" : ""; ?>>
                                <label for="use_warrior_skills">Use Warrior Skills</label><br/>
                                <input type="checkbox" id="block_handins_if_kos" name="47"
                                       value="47,1^"<?php echo ($specabil[47] == 1) ? "checked" : ""; ?>>
                                <label for="block_handins_if_kos">Block handins if KOS</label><br/>
                                <input type="checkbox" id="pc_deathblow_leaves_corpse" name="48"
                                       value="48,1^"<?php echo ($specabil[48] == 1) ? "checked" : ""; ?>>
                                <label for="pc_deathblow_leaves_corpse">PC Deathblow Leaves Corpse</label><br/>
                            </td>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <input type="checkbox" id="resist_ranged_spells" name="26"
                                       value="26,1^"<?php echo ($specabil[26] == 1) ? "checked" : ""; ?>>
                                <label for="resist_ranged_spells">Resist Ranged Spells</label><br/>
                                <input type="checkbox" id="immune_to_taunt" name="28"
                                       value="28,1^"<?php echo ($specabil[28] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_taunt">Immune to Taunt</label><br/>
                                <input type="checkbox" id="immune_to_melee" name="19"
                                       value="19,1^"<?php echo ($specabil[19] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_melee">Immune to Melee</label><br/>
                                <input type="checkbox" id="immune_to_magic" name="20"
                                       value="20,1^"<?php echo ($specabil[20] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_magic">Immune to Magic</label><br/>
                                <input type="checkbox" id="immune_to_fleeing" name="21"
                                       value="21,1^"<?php echo ($specabil[21] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_fleeing">Immune to Fleeing</label><br/>
                                <input type="checkbox" id="immune_to_non-magical_melee" name="23"
                                       value="23,1^"<?php echo ($specabil[23] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_non-magical_melee">Immune to non-Magical Melee</label><br/>
                                <input type="checkbox" id="immune_to_non-Bane_melee" name="22"
                                       value="22,1^"<?php echo ($specabil[22] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_non-Bane_melee">Immune to non-Bane Melee</label><br/>
                                <input type="checkbox" id="immune_to_disarm" name="52"
                                       value="52,1^"<?php echo ($specabil[52] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_disarm">Immune to Disarm</label><br/>
                                <input type="checkbox" id="immune_to_riposte" name="53"
                                       value="53,1^"<?php echo ($specabil[53] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_riposte">Immune to Riposte</label><br/>
                                <input type="checkbox" id="will_not_aggro" name="24"
                                       value="24,1^"<?php echo ($specabil[24] == 1) ? "checked" : ""; ?>>
                                <label for="will_not_aggro">Will Not Aggro</label><br/>
                                <input type="checkbox" id="immune_to_aggro" name="25"
                                       value="25,1^"<?php echo ($specabil[25] == 1) ? "checked" : ""; ?>>
                                <label for="immune_to_aggro">Immune to Aggro</label><br/>
                                <input type="checkbox" id="see_through_feign_death" name="27"
                                       value="27,1^"<?php echo ($specabil[27] == 1) ? "checked" : ""; ?>>
                                <label for="see_through_feign_death">See through Feign Death</label><br/>
                                <input type="checkbox" id="can_aggro_npcs" name="npc_aggro"
                                       value="1"<?php echo (isset($npc_aggro) && $npc_aggro == 1) ? "checked" : ""; ?>>
                                <label for="can_aggro_npcs">Can Aggro NPCs</label><br/>
                                <input type="checkbox" id="aggro_pc" name="aggro_pc"
                                       value="1"<?php echo (isset($aggro_pc) && $aggro_pc == 1) ? "checked" : ""; ?>>
                                <label for="aggro_pc">Always Aggro Players</label><br/>
                                <input type="checkbox" id="does_not_buff_heal_friends" name="30"
                                       value="30,1^"<?php echo ($specabil[30] == 1) ? "checked" : ""; ?>>
                                <label for="does_not_buff_heal_friends">Does NOT buff/heal friends</label><br/>
                                <input type="checkbox" id="always_flee" name="36"
                                       value="36,1^"<?php echo ($specabil[36] == 1) ? "checked" : ""; ?>>
                                <label for="always_flee">Always Flee</label><br/>
                                <input type="checkbox" id="always_flee_if_low_con" name="45"
                                       value="45,1^"<?php echo ($specabil[45] == 1) ? "checked" : ""; ?>>
                                <label for="always_flee_if_low_con">Always Flee if Low Con</label><br/>
                                <input type="checkbox" id="permaroot_flee" name="34"
                                       value="34,1^"<?php echo ($specabil[34] == 1) ? "checked" : ""; ?>>
                                <label for="permaroot_flee">Permaroot Flee</label><br/>
                                <input type="checkbox" id="no_loitering" name="46"
                                       value="46,1^"<?php echo ($specabil[46] == 1) ? "checked" : ""; ?>>
                                <label for="no_loitering">No Loitering</label><br/>
                                <input type="checkbox" id="allow_beneficial" name="38"
                                       value="38,1^"<?php echo ($specabil[38] == 1) ? "checked" : ""; ?>>
                                <label for="allow_beneficial">Allow Beneficial</label><br/>
                                <input type="checkbox" id="allow_tank" name="41"
                                       value="41,1^"<?php echo ($specabil[41] == 1) ? "checked" : ""; ?>>
                                <label for="allow_tank">Allow Tank</label><br/>
                                <input type="checkbox" id="proximity_aggro" name="42"
                                       value="42,1^"<?php echo ($specabil[42] == 1) ? "checked" : ""; ?>>
                                <label for="proximity_aggro">Proximity Aggro</label><br/>
                                <input type="checkbox" id="always_call_for_help" name="43"
                                       value="43,1^"<?php echo ($specabil[43] == 1) ? "checked" : ""; ?>>
                                <label for="always_call_for_help">Always Call for Help</label><br/>
                            </td>
                        </tr>
                    </table>
                </div>
            </fieldset>
            <br/>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Appearance</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="size">Size:</label> <br/><input type="text"
                                                                                                             id="size"
                                                                                                             name="size"
                                                                                                             size="10"
                                                                                                             value="<?= $size ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="face">Face:</label> <br/><input type="text"
                                                                                                             id="face"
                                                                                                             name="face"
                                                                                                             size="10"
                                                                                                             value="<?= $face ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="luclin_haircolor">Haircolor:</label>
                            <br/><input type="text" id="luclin_haircolor" name="luclin_haircolor" size="10"
                                        value="<?= $luclin_haircolor ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="luclin_hairstyle">Hairstyle: <br/><input
                                        type="text"
                                        name="luclin_hairstyle"
                                        size="10"
                                        value="<?= $luclin_hairstyle ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="luclin_eyecolor">Eyecolor:</label>
                            <br/><input type="text"
                                        id="luclin_eyecolor"
                                        name="luclin_eyecolor" size="10"
                                        value="<?= $luclin_eyecolor ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="luclin_eyecolor2">Eyecolor2:</label>
                            <br/><input type="text"
                                        id="luclin_eyecolor2"
                                        name="luclin_eyecolor2"
                                        size="10"
                                        value="<?= $luclin_eyecolor2 ?? "" ?>">
                        </td>
                    </tr>
                    <tr>

                        <td style="padding: 3px; text-align: left; width: 17%"><label for="luclin_beard">Beard:</label> <br/><input
                                    type="text" id="luclin_beard" name="luclin_beard"
                                    size="10"
                                    value="<?= $luclin_beard ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="luclin_beardcolor">Beardcolor:</label><br/><input
                                    type="text"
                                    id="luclin_beardcolor"
                                    name="luclin_beardcolor"
                                    size="10"
                                    value="<?= $luclin_beardcolor ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="d_melee_texture1">Melee1:</label>
                            <br/><input type="text" id="d_melee_texture1" name="d_melee_texture1"
                                        size="10"
                                        value="<?= $d_melee_texture1 ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="d_melee_texture2">Melee2:</label>
                            <br/><input type="text" id="d_melee_texture2" name="d_melee_texture2"
                                        size="10"
                                        value="<?= $d_melee_texture2 ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="armortint_id">Armor Tint ID:</label>
                            <br/><input type="text"
                                        id="armortint_id"
                                        name="armortint_id"
                                        size="10"
                                        value="<?= $armortint_id ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="armortint_red">Armor Red:</label>
                            <br/><input type="text" id="armortint_id" name="armortint_red"
                                        size="10"
                                        value="<?= $armortint_red ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="armortint_green">Armor
                                Green:</label><br/><input type="text"
                                                          id="armortint_green"
                                                          name="armortint_green"
                                                          size="10"
                                                          value="<?= $armortint_green ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="armortint_blue">Armor Blue:</label>
                            <br/><input type="text"
                                        id="armortint_blue"
                                        name="armortint_blue" size="10"
                                        value="<?= $armortint_blue ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="light">Light Source:</label> <br/><input
                                    type="text" id="light" name="light"
                                    size="10"
                                    value="<?= $light ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="texture">Texture:</label> <br/><input
                                    type="text" id="texture" name="texture"
                                    size="10"
                                    value="<?= $texture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="helmtexture">HelmTexture:</label>
                            <br/><input type="text" id="helmtexture"
                                        name="helmtexture"
                                        size="10"
                                        value="<?= $helmtexture ?? "" ?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="feettexture">FeetTexture:</label> <br/>
                            <input type="text" id="feettexture" name="feettexture"
                                   size="10"
                                   value="<?= $feettexture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="chesttexture">ChestTexture:</label>
                            <br/><input type="text"
                                        id="chesttexture"
                                        name="chesttexture" size="10"
                                        value="<?= $chesttexture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="armtexture">ArmTexture:</label> <br/><input
                                    type="text" id="armtexture" name="armtexture"
                                    size="10"
                                    value="<?= $armtexture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="bracertexture">BracerTexture:</label> <br/><input
                                    type="text"
                                    id="bracertexture"
                                    name="bracertexture"
                                    size="10"
                                    value="<?= $bracertexture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%">
                            <label for="handtexture">HandTexture:</label><br/>
                            <input type="text" id="handtexture"
                                   name="handtexture"
                                   size="10"
                                   value="<?= $handtexture ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 17%"><label for="legtexture">LegTexture:</label> <br/>
                            <input type="text" id="legtexture" name="legtexture"
                                   size="10"
                                   value="<?= $legtexture ?? "" ?>">
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 50%">
                            <label for="prim_melee_type">Melee1 Type:</label><br/>
                            <select id="prim_melee_type" name="prim_melee_type" style="width: 200px;">
                                <?php foreach ($skilltypes as $key => $value): ?>
                                    <option value="<?= $key ?>"<?php echo (isset($prim_melee_type) && $key == $prim_melee_type) ? " selected" : ""; ?>><?= $key ?>
                                        : <?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="padding: 3px; text-align: left; width: 50%">
                            <label for="sec_melee_type">Melee2 Type:</label><br/>
                            <select id="sec_melee_type" name="sec_melee_type" style="width: 200px;">
                                <?php foreach ($skilltypes as $key => $value): ?>
                                    <option value="<?= $key ?>"<?php echo (isset($sec_melee_type) && $key == $sec_melee_type) ? " selected" : ""; ?>><?= $key ?>
                                        : <?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="padding: 3px; text-align: left; width: 50%">
                            <label for="ranged_type">Ranged Type:</label><br/>
                            <select id="ranged_type" name="ranged_type" style="width: 200px;">
                                <?php foreach ($skilltypes as $key => $value): ?>
                                    <option value="<?= $key ?>"<?php echo (isset($ranged_type) && $key == $ranged_type) ? " selected" : ""; ?>><?= $key ?>
                                        : <?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br/>
            <fieldset>
                <legend><strong><span style="font-size: 18px;">Misc</span></strong></legend>
                <table style="width: 100%; border: 0; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 3px; text-align: left; width: 14%"><label for="spawn_limit">Spawn
                                Limit:</label>
                            <br/><input type="text" id="spawn_limit" name="spawn_limit"
                                        size="6"
                                        value="<?= $spawn_limit ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%"><label for="emoteid">Emote ID:</label>
                            <br/><input
                                    type="text" id="emoteid" name="emoteid"
                                    size="6"
                                    value="<?= $emoteid ?>"></td>
                        <td style="padding: 3px; text-align: left; width: 16%"><label for="loottable_id">Loot
                                ID:</label> <br/><input
                                    type="text" id="loottable_id" name="loottable_id"
                                    size="9"
                                    value="<?= $loottable_id ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%"><label for="npc_spells_id">Spells
                                ID:</label>
                            <br/><input type="text" id="npc_spells_id" name="npc_spells_id"
                                        size="6"
                                        value="<?= $npc_spells_id ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 16%">
                            <label for="npc_spells_effect_id">Spells Effects ID:</label> <br/>
                            <input type="text" id="npc_spells_effect_id" name="npc_spells_effects_id" size="9"
                                   value="<?= $npc_spells_effects_id ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 14%"><label for="npc_faction_id">Faction
                                ID:</label>
                            <br/><input type="text"
                                        id="npc_faction_id"
                                        name="npc_faction_id" size="6"
                                        value="<?= $npc_faction_id ?? "" ?>">
                        </td>
                        <td style="padding: 3px; text-align: left; width: 12%"><label for="greed">Greed:</label>
                            <br/><input
                                    type="text" id="greed" name="greed" size="5"
                                    value="<?= $greed ?? "" ?>"></td>
                    </tr>
                </table>
                <br/>
                <div class="center">
                    <table>
                        <tr>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <input type="checkbox" id="qglobal" name="qglobal"
                                       value="1"<?php echo ($qglobal == 1) ? " checked" : ""; ?>> <label for="qglobal">Enable
                                    Quest
                                    Globals</label><br/>
                                <input type="checkbox" id="isquest" name="isquest"
                                       value="1"<?php echo (isset($isquest) && $isquest == 1) ? " checked" : ""; ?>>
                                <label for="isquest">Has
                                    Quest File</label><br/>
                            </td>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <input type="checkbox" id="unique_spawn_by_name" name="unique_spawn_by_name"
                                       value="1"<?php echo (isset($unique_spawn_by_name) && $unique_spawn_by_name == 1) ? " checked" : ""; ?>>
                                <label for="unique_spawn_by_name">Unique by Name</label><br/>
                                <input type="checkbox" id="underwater" name="underwater"
                                       value="1"<?php echo (isset($underwater) && $underwater == 1) ? " checked" : ""; ?>>
                                <label for="underwater">Underwater NPC</label><br/>
                                <input type="checkbox" id="ignore_despawn" name="ignore_despawn"
                                       value="1"<?php echo (isset($ignore_despawn) && $ignore_despawn == 1) ? " checked" : ""; ?>>
                                <label for="ignore_despawn">Ignore Despawn</label><br/>
                            </td>
                            <td style="padding: 20px; vertical-align: top; text-align: left;">
                                <input type="checkbox" id="pet" name="pet"
                                       value="1"<?php echo ($pet == 1) ? " checked" : ""; ?>>
                                <label for="pet">NPC is a Pet</label><br/>
                                <input type="checkbox" id="private_corpse" name="private_corpse"
                                       value="1"<?php echo (isset($private_corpse) && $private_corpse == 1) ? " checked" : ""; ?>>
                                <label for="private_corpse">Corpse does not Unlock</label><br/>
                                <input type="checkbox" id="raid_target" name="raid_target"
                                       value="1"<?php echo (isset($raid_target) && $raid_target == 1) ? " checked" : ""; ?>>
                                <label for="raid_target">Raid Target</label><br/>
                            </td>
                        </tr>
                    </table>
                </div>
            </fieldset>
            <br/>
            <div class="center">
                <input type="submit" value="Submit Changes">
            </div>
        </div>
    </div>
</form>
