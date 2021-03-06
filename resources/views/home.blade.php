@extends('layouts.main')

@section('content')
    {{-- KAMPAGNE MIT VIDEO --}}
    <section class="app-brief grey-bg" id="kampagne">

        <div class="container">

            <div class="row">

                {{-- PHONES IMAGE --}}
                <div class="col-md-6 wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">
                    <div class="video-container">

                        <div class="video">

                            <iframe width="560" height="315" src="https://www.youtube.com/embed/goh1tNmKh6A" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

                {{-- RIGHT SIDE WITH BRIEF --}}
                <div class="col-md-6 left-align wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">

                    {{-- SECTION TITLE --}}
                    <h2 class="dark-text">Über Sanktionsfrei</h2>

                    <div class="colored-line-left">
                    </div>

                    <p>
                        Sechs Millionen Menschen leben in Deutschland von Hartz IV - darunter 1,7 Millionen Kinder. Der Regelbedarf beträgt 404 € für eine alleinstehende Person. Was viele nicht wissen: Die Jobcenter verhängen gegen Menschen, die sich auf die finanzielle Hilfe des Staates verlassen müssen, Sanktionen. Sie kürzen die monatlichen Leistungen damit unter das Existenzminimum.<br/>
                        Wir finden Sanktionen unangemessen und menschenunwürdig.<br/>
                        <strong>Ein Existenzminimum muss ein Existenzminimum bleiben</strong>.<br/>
                        Unser Ziel ist es, mit eurer Hilfe die Sanktionen abzuschaffen.
                        
                        Mehr Informationen über unsere aktuellen Aktionen 
                        findest Du in unserem <strong><a href="https://www.startnext.com/sanktionsfrei/blog/">Blog</a>.</strong>
                    </p>

                </div>
                {{-- /END RIGHT BRIEF --}}

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END SECTION --}}

    {{-- HINTERGRUNDINFOS --}}
    <section class="app-brief" id="hintergrund">

        <div class="container">

            <div class="row">

                {{-- BRIEF --}}
                <div class="col-md-12 left-align wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

                    {{-- SECTION TITLE --}}
                    <h2 class="dark-text">Hintergrund</h2>

                    <div class="colored-line-left">
                    </div>

                    <p>
                        Im Schnitt ist jede vierte leistungsberechtigte Person einmal pro Jahr von Sanktionierungen
                        betroffen. Dass die Sanktionen dabei häufig gegen Gesetze verstoßen, belegt die hohe
                        Erfolgsquote
                        der Widersprüche: Über 40% Prozent aller Klagen sind erfolgreich.<br/>
                        Doch nur fünf Prozent der Betroffenen fordern ihre Rechte ein. Genau hier setzt Sanktionsfrei
                        an:
                        Inge Hannemann und das Berliner Team aus kreativen Querdenkenden um Michael Bohmeyer wollen
                        schaffen, was die Politik seit über zehn Jahren versäumt: das Hartz-IV-System in eine
                        sanktionsfreie
                        Mindestsicherung umgestalten.
                    </p>
                    <p>
                         <a target="_blank" href="/flyer.pdf" class="btn btn-default btn-lg standard-button">Flyer herunterladen</a>
                    </p>

                </div>
                {{-- /ENDBRIEF --}}

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END HINTERGRUNDINFOS --}}

    {{-- GESCHICHTEN --}}
    <section class="testimonials" id="geschichten">

        <div class="color-overlay">

            <div class="container wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">

                {{-- FEEDBACKS --}}
                <div id="feedbacks" class="owl-carousel owl-theme">

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/aa.jpg" alt="Agentur für Arbeit Logo">
                        </div>

                        <div class="message">
                            Erstmals war ich beim JobCenter Februar 2011, da war ich 62 Jahre alt.
                            Man hat mich unmittelbar zu einer dieser Vermittlungszentren 50+ der DEKRA beordert. Dort saß ich mir den 
                            ganzen Tag nur den Hintern vor einem Computer platt. Es gibt keinen Ausweg, wie mir die Vermittlerin beim JobCenter mitteilte, ansonsten müsse ich mit Sanktionen rechnen.
                            und die Eingliederungsvereinbarung müsse ich auch unterschreiben. Nach den drei Monaten wurde ich dann doch in Frührente gezwungen.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Anonym
                        </div>
                        <div class="company-info">
                            vom Jobcenter mit Sanktionen bedroht
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/isabella.jpg" alt="Isabella">
                        </div>

                        <div class="message">
                            Nach Ende des Studiums habe ich zur Überbrückung ein paar Monate in einem Café gejobbt
                            und mich nebenher für Stellen beworben. Das Geld hat nicht einmal für die Miete gereicht,
                            weshalb ich den Job aufgab und ALGII beantragte. Kurz nach Bewilligung kam die Sanktion ins
                            Haus geflattert: 30% Minderung. Um mich dafür abzustrafen, dass ich nicht unter
                            Existenzminimum leben wollte? Das macht keinen Sinn.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Isabella B.
                        </div>
                        <div class="company-info">
                            vom Jobcenter sanktioniert
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                    {{-- SINGLE FEEDBACK --}}
                    <div class="feedback">

                        {{-- IMAGE --}}
                        <div class="image">
                            {{-- i class=" icon_quotations"></i --}}
                            <img src="images/clients-pic/aa.jpg" alt="Agentur für Arbeit Logo">
                        </div>

                        <div class="message">
                            Ich war zweieinhalb Jahre in einem Jobcenter als Arbeitsvermittler tätig. Grundsätzlich geht es nur
                            sekundär um diejenigen, denen dort geholfen werden soll. Das Führungspersonal steht unter großem Druck,
                            gewünschte Zahlen zu produzieren; diesem Ziel wird dort alles untergeordnet. Einmal hieß es:
                            »Bei den Sanktionen sind wir im vorderen Drittel, weiter so!« Eines der wichtigsten Ziele eines
                            Jobcenters ist die Senkung der passiven Leistung, da sind Sanktionen das einfachste Mittel.
                        </div>

                        <div class="white-line">
                        </div>

                        {{-- INFORMATION --}}
                        <div class="name">
                            Jobcentermitarbeiter, will anonym bleiben
                        </div>
                        <div class="company-info">
                            muss sanktionieren
                        </div>

                    </div>
                    {{-- /END SINGLE FEEDBACK --}}

                </div>
                {{-- /END FEEDBACKS --}}

            </div>
            {{-- /END CONTAINER --}}

        </div>
        {{-- /END COLOR OVERLAY --}}

    </section>
    {{-- /END GESCHICHTEN SECTION --}}

    {{-- FEATURES --}}
    <section class="features" id="features">

        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="section-header wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">

                {{-- SECTION TITLE --}}
                <h2 class="dark-text">Features</h2>
                <div class="colored-line">
                </div>
                <div class="section-description">
                    Diese Funktionen wollen wir entwickeln. Mehr zum Stand der Entwicklung findest du in unserem <a href="https://www.startnext.com/sanktionsfrei/blog/">Blog</a>
                </div>
                <div class="colored-line">
                </div>
            </div>
            {{-- /END SECTION HEADER --}}


            <div class="row">

                {{-- FEATURES LEFT --}}
                <div class="col-md-4 col-sm-4 features-left wow fadeInLeft animated" data-wow-offset="10"
                     data-wow-duration="1.5s">

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-1" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_documents_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Online-Anträge</h4>
                            <p>
                                Mit Sanktionsfrei kannst du deine Anträge unkompliziert online ausfüllen.<br/>
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-2" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_globe-2"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Mehrsprachigkeit</h4>
                            <p>
                                Sanktionsfrei wird in verschiedenen Sprachen verfügbar sein.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-3" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_mail_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Briefverkehr</h4>
                            <p>
                                Sanktionsfrei übernimmt für dich den Briefverkehr, kostenfrei und mit
                                Zustellbestätigung.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                </div>
                {{-- /END FEATURES LEFT --}}

                {{-- PHONE IMAGE --}}
                <div class="col-md-4 hidden-xs">
                    <div class="phone-image wow bounceIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                        <img id="feature-image" src="images/screenshots/features/1.png" alt="">
                    </div>
                </div>

                {{-- FEATURES RIGHT --}}
                <div class="col-md-4 col-sm-4 features-right wow fadeInRight animated" data-wow-offset="10"
                     data-wow-duration="1.5s">

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-4" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_chat_alt"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Reaktionsmaschine</h4>
                            <p>
                                Sanktionsfrei schlägt dir vor, wie du am besten auf Post vom Jobcenter
                                reagierst.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-5" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_phone"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Anwaltliche Beratung</h4>
                            <p>
                                Erfahrene Anwälte stehen bereit und beraten per Videochat.
                            </p>
                        </div>

                    </div>

                    {{-- /END SINGLE FEATURE --}}

                    {{-- FEATURE --}}
                    <div class="feature" id="feature-6" onClick="notWorkingYet()">

                        {{-- ICON --}}
                        <div class="icon-container">
                            <div class="icon">
                                <i class="icon_lock"></i>
                            </div>
                        </div>

                        {{-- FEATURE HEADING AND DESCRIPTION --}}
                        <div class="feature-details">
                            <h4 class="main-color">Deine Daten gehören dir</h4>
                            <p>
                                Alle Daten werden verschlüsselt auf deinem Computer abgelegt und nur bei Bedarf übertragen.
                            </p>
                        </div>

                    </div>
                    {{-- /END SINGLE FEATURE --}}

                </div>
                {{-- /END FEATURES RIGHT --}}

            </div>
            {{-- /END ROW --}}

        </div>
        {{-- /END CONTAINER --}}

    </section>
    {{-- /END FEATURES SECTION --}}

    {{-- UNTERSTÜTZEN --}}
    <section class="download" id="unterstuetzen">

        <div class="color-overlay">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        {{-- BUTTONS AREA --}}
                        <div class="download-container">
                            <h2 class=" wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
                                Sanktionsfrei
                                unterstützen</h2>
                            <p>Ihr habt uns mit über 125.000 Euro unterstützt! Dank euch sind wir eine der erfolgreichsten Crowdfundingkampagnen
                            Deutschlands.Wir befinden uns nun in der Entwicklungsphase.
                            Nach wie vor können wir jede Unterstützung gebrauchen!
                            Jeder Euro kommt an!
                            Herzlichen Dank für die unermüdliche Unterstützung!
                            Neuste Informationen bekommt ihr per Newletter, im <a style="color: #1FACB6" href="https://blog.sanktionsfrei.de">Blog</a> und auf <a style="color: #1FACB6" href="https://facebook.com/sanktionsfrei">Facebook</a>, sowie auf <a style="color: #1FACB6" href="https://twitter.com/sanktionsfrei">Twitter</a>.</p>
                            <br/>
                            {{-- BUTTONS --}}
                            <div class="buttons wow fadeInRight animated" data-wow-offset="10" data-wow-duration="1.5s">

                                <div class="buttons referer-button">

                                    <a href="#donate" data-toggle="modal" data-taget="#donate" class="btn btn-default btn-lg standard-button">Beliebigen Betrag spenden</a>

                                </div>

                            </div>
                            {{-- /END BUTTONS --}}

                        </div>
                        {{-- END OF BUTTONS AREA --}}

                    </div>
                    {{-- END COLUMN --}}

                </div>
                {{-- END ROW --}}

            </div>
            {{-- /END CONTAINER --}}
        </div>
        {{-- /END COLOR OVERLAY --}}

    </section>
    {{-- /END UNTERSTÜTZEN SECTION --}}
@stop
