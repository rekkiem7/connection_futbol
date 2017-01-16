<html>
                            <head>
                                <title>Actualizar Correo</title>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                <style>
                                .expired {
                                    background:url("email_background.jpg") no-repeat left top;
                                </style>
                            </head>
                            <body class="expired">
                                <table width="100%"  cellspacing="0" cellpadding="0" align="center" style="max-width:600px;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="100%" height="80"  align="center" cellpadding="0" cellspacing="0" style="background:#f0f0f0;">
                                                    <tbody>
                                                        <tr >
                                                            <td bgcolor="#428bca"><center><img src="{{asset('/EntreLigas.png')}}" width="50%" /></center><br>
                                                                <table style="font-size:16px;text-decoration:none;font-family:arial;">
                                                                    <tr>
                                                                        <td style="padding-left:30px;color:#fff;"><strong>De</strong></td><td style="padding-left:10px;color:#fff;">: info@entreligas.cl</td>
                                                                    </tr>    
                                                                    <tr>
                                                                        <td style="padding-left:30px;color:#fff"><strong>Para</strong></td><td style="padding-left:10px;color:#fff;">: {{$email}}</td>
                                                                    </tr>    
                                                                    <tr>
                                                                        <td style="padding-left:30px;color:#fff"><strong>Asunto</strong></td><td style="padding-left:10px;color:#fff;">: {{$subject}}</td>
                                                                    </tr>    
                                                                </table>    
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table><br>
                                                <table width="100%" height="80"  align="center" cellpadding="0" cellspacing="0" style="background:#f0f0f0;padding:10px;">
                                                     <tr class="expired">
                                                         <td style="padding-left:30px"><br>
                                                             <table style="font-size:14px;text-decoration:none;font-family:arial;">
                                                                 <tr>
                                                                     <td colspan="2"><strong>Bienvenido</strong>, EntreLigas FC tiene el agrado de invitarte a registrarte y a formar parte de la plantilla de jugadores del siguiente equipo:</td>
                                                                 </tr>
                                                                 <tr>
                                                                     <td style="padding-top:20px"><img src="{{asset($teamEscude)}}" width="100px"/></td>
                                                                     <td><table>
                                                                            <tr>
                                                                                <td><strong>Equipo {{$teamName}}</strong></td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td><strong>{{$leagueName}} - Categoria {{$categoryName}}</strong></td>
                                                                            </tr>
                                                                         </table>
                                                                     </td>
                                                                 </tr>
                                                                 <tr>
                                                                     <td colspan="2" style="padding-top:15px">{!!$body!!}</td>
                                                                 </tr>
                                                             </table>
                                                         </td>
                                                     </tr>
                                                </table>
                                                <table width="100%" height="80"  align="center" cellpadding="0" cellspacing="0" style="background:#f0f0f0;padding:10px;"">
                                                <?php $league=base64_encode($league);
                                                      $category=base64_encode($category);
                                                      $team=base64_encode($team);
                                                      $tournament=base64_encode($tournament); 
                                                      $params=base64_encode($type).'|'.$league.'|'.$category.'|'.$team.'|'.$tournament; 
                                                ?>
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <br><br>                                
                                                                <a href="{{url('/register/'.$params)}}" style="background-color:#208CD5;color:#ffffff;border:none;padding:10px; border-radius:5px;width:250px;font-size:18px;text-decoration:none;font-family:arial;">Confirmar</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>    
                                                </table>
                                                <table width="100%" height="80"  align="center" cellpadding="0" cellspacing="0" style="background:#f0f0f0;padding:10px;"">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </body>
                        </html>