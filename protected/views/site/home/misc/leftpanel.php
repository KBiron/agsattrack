        <div id="satinfot" class="easyui-tabs" data-options="fit:true">
            <div title="Satellite Info." style="overflow: auto; padding: 5px;">
                <div id="sat-info-selector"></div>
                <div id="satinfo-message">
                    <h2><center>No Satellite Selected</center></h2>
                    <p><center>Please select a satellite to display its information.</center></p>
                </div>
                
                <table width="100%" class="satinfo" style="display:none">
                    <tr>
                        <th colspan="2">Element Values</th>
                    </tr>
                    <tr>
                        <td width="50%">Cat Num</td>
                        <td id="noradid" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td id="name" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td id="owner" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td id="period" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Inclination</td>
                        <td id="inclination" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Apogee</td>
                        <td id="apogee" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Perigee</td>
                        <td id="perigee" class="sat-info"></td>
                    </tr>
                    <tr>
                        <th colspan="2">Calculated Values</th>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td id="latitude" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td id="longitude" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Altitude</td>
                        <td id="altitude" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Orbit Number</td>
                        <td id="orbitnumber" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Visible</td>
                        <td id="visible" class="sat-info"></td>
                    </tr>
                    
                    <tr>
                        <td>Velocity</td>
                        <td id="velocity" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Footprint</td>
                        <td id="footprint" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Range</td>
                        <td id="range" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Range rate</td>
                        <td id="rangerate" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Doppler Shift (Hz)</td>
                        <td id="doppler" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Signal Loss (dB)</td>
                        <td id="loss" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Signal Delay (ms)</td>
                        <td id="delay" class="sat-info"></td>
                    </tr>                                                               
                    <tr>
                        <td>Elevation</td>
                        <td id="elevation" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Azimuth</td>
                        <td id="azimuth" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Orbital Phase</td>
                        <td id="orbitalphase" class="sat-info"></td>
                    </tr>
                    <tr>
                        <td>Geostationary</td>
                        <td id="geostationary" class="sat-info"></td>
                    </tr>                    
                </table>
            </div>

            <div title="Satellite Selector" style="padding: 5px;">
                <div id="quick-sat-selector"></div>
            </div>            
        </div>