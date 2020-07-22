<?php
namespace Torre\Controllers;


use Torre\apiBridge;

use Torre\Views;
use Torre\Service;
use Torre\Service\TorreJobsService as TorreJobsService;

class TorreJobsController extends Controller {

    /**
     * TorreJobsController constructor.
     * @param $request
     */
    public function __construct($request)
    {

        parent::__construct($request,new apiBridge('Jobs' , $request));

    }

    public function show(){
       $data = $this->service->getResults();
        //$data['results']="{"aggregators":{},"offset":0,"results":[{"id":"ldE7J3W7","objective":"PHP FullStack Developer.","type":"freelance-gigs","organizations":[{"id":343270,"name":"Doméstika","picture":"https://torre-media.s3-us-west-2.amazonaws.com/organizations/Domestika.png"}],"locations":[],"remote":true,"external":false,"deadline":"2020-08-02T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":32052,"name":"PHP","experience":"2-plus-years"},{"code":55534,"name":"Fullstack Development","experience":"2-plus-years"},{"code":45285,"name":"LAMP","experience":"2-plus-years"}],"members":[{"subjectId":"84466","name":"Laura Méndez Hortua","username":"lauramendezhortua","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/16da19fcaa3f625c89af589e7cd4af1068068570/profile_4DtHYVZ.jpg","member":true,"manager":true,"poster":false,"weight":1560.8285},{"subjectId":"144637","name":"Yuliana Velasquez Ramírez","username":"yulianavelasquezr","professionalHeadline":"Independent Recruiter Advisor.","picture":"https://starrgate.s3.amazonaws.com:443/users/da4a2c2dc317fc852cc4a59a943b2fc44d87e2a1/profile_rbJ9Jmm.jpg","member":true,"manager":true,"poster":true,"weight":616.4027},{"subjectId":null,"name":"Julio G. Cotorruelo","username":"756366c2-d018-4414-8a02-f2b3032b4583","professionalHeadline":"CEO","picture":"file: https://zapier.com/engine/hydrate/5827795/.eJx1jktuhDAQRO_Sa4T5g73NIlIWuYLlTw84GJuYJtFoxN0DEtssq1R69V5gJjSznPEJoh2qvudtBiYGwkCSniuCgE_IwIWNVDAonQXRF23Ju6rJ4OHQWxnUcu0s_siH83jO51-Vxg3EC27G3e_Jn2EiWjfBmPW5comU9pibuLBcESkzLef3xqre1loPtlUd77AcyqYbKq1qtJwXVmtWIq_rQjfsY_cuvsu3SDGlHX3Mv9bxPEv4veNGl8WCNMXTHEYkOLIrq6u_zf8jeAwjTSDKtmna4zj-AC32Ywo:1jbArU:X7Guyl48hgQwHiYLX-c1N5T6H0Q/\nfilename: JulioG_Cotorruelo.jpg\nid: atth8D7yjQUiGv4ty\nsize: 15445\nthumbnails: {'small': {'url': 'https://dl.airtable.com/.attachmentThumbnails/fa1a3bec020a904f654f53646853cc2d/45dc3ace', 'width': 36, 'height': 36}, 'large': {'url': 'https://dl.airtable.com/.attachmentThumbnails/7a5a26d3237e4799bc9d8fe3c7602897/74657ae1', 'width': 299, 'height': 299}, 'full': {'url': 'https://dl.airtable.com/.attachmentThumbnails/77ce4d7f8d6281f2d1f792d43d8dc68f/16d20c78', 'width': 3000, 'height': 3000}}\ntype: image/jpeg\nurl: https://dl.airtable.com/.attachments/27d3bb8d5a696e1814682ba3ed990dbb/1e9330b4/JulioG_Cotorruelo.jpg","member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[{"id":"OwbKk3do","text":"¡Hola Jimmy! Esta oferta laboral es completamente Remoto, puedes aplicar desde cualquier lugar. Recuerda que tu hoja de vida es tu Bio aquí en Torre, en tu perfil puedes colocar toda tu trayectoria, así las empresas interesadas en ti podrán evaluarte, para aplicar a esta oferta puedes darle click en \"aplicar\" al final de ella, en el proceso la persona encargada te estará informando. ¡Éxitos!","date":"2020-07-16T17:45:44.000Z"},{"id":"6WZOqNw1","text":"Hola, me interesa su oferta laboral, por favor mas informacion al respecto, puede  contactarme al correo rafael_2008@hotmail.com, estare atento, saludos","date":"2020-07-18T05:12:25.000Z"},{"id":"VroBOmdy","text":"¡Hola Rafael! Tu hoja de vida es tu Bio aquí en Torre, en tu perfil puedes colocar toda tu trayectoria, así las empresas interesadas en ti podrán evaluarte, para aplicar a esta oferta puedes darle click en \"aplicar\" al final de ella, en el proceso la persona encargada te estará informando. ¡Éxitos!","date":"2020-07-20T17:30:13.000Z"}],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"PHP":24.0,"Fullstack Development":24.0,"LAMP":24.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["PHP","Fullstack Development","LAMP"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"NwB238wb","objective":"Programador PHP","type":"part-time-employment","organizations":[{"id":321146,"name":"Pura Vida ONG","picture":"https://torre-media.s3-us-west-2.amazonaws.com/puravida.png"}],"locations":["Argentina"],"remote":true,"external":false,"deadline":"2020-08-16T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":32052,"name":"PHP","experience":"3-plus-years"},{"code":186838,"name":"Bases de datos","experience":"3-plus-years"},{"code":26327,"name":"Software","experience":"3-plus-years"}],"members":[{"subjectId":"218202","name":"Ana María Varela","username":"AnaVarela","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/a487a163de0be0ad390d9d3af0592b017601fd90/profile_Oo4O2Vj.jpg","member":false,"manager":true,"poster":false,"weight":475.4182},{"subjectId":"218266","name":"Laura Natalia Motta Cadena","username":"LauraMotta","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/61518b5587392840302149719d440834999de9aa/profile_3bVf0Kb.jpg","member":true,"manager":true,"poster":true,"weight":131.1783},{"subjectId":null,"name":"Gustavo Duran.","username":"5d2babde-6467-4d19-b23a-0e052a3388e5","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"PHP":36.0,"Bases de datos":36.0,"Software":36.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["PHP","Bases de datos","Software"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"8W3YGadN","objective":"Desarrollador iOS Senior","type":"full-time-employment","organizations":[{"id":325428,"name":"Colombia SAS","picture":null}],"locations":["Colombia","California, EE. UU."],"remote":true,"external":false,"deadline":"2020-08-16T04:30:00.000Z","status":"open","compensation":{"data":{"code":"range","currency":"USD$","minAmount":3000.0,"maxAmount":6000.0,"periodicity":"monthly"},"visible":true},"skills":[{"code":170818,"name":"Objective-C punteros","experience":"1-plus-year"},{"code":23802,"name":"HTML","experience":"potential-to-develop"},{"code":32052,"name":"PHP","experience":"potential-to-develop"},{"code":55799,"name":"MySQL","experience":"potential-to-develop"},{"code":17078,"name":"IOS","experience":"2-plus-years"},{"code":166780,"name":"Androide","experience":"1-plus-year"},{"code":6423,"name":"Xcode","experience":"potential-to-develop"},{"code":29373,"name":"Laravel","experience":"potential-to-develop"},{"code":25148,"name":"MVS","experience":"potential-to-develop"}],"members":[{"subjectId":"39744","name":"Luis Felipe Gomez Noy","username":"luisfgomeznoy","professionalHeadline":"Comercio internacional y finanzas","picture":"https://starrgate.s3.amazonaws.com:443/users/be602965d347a49ae963135065349c7386ba0022/profile_KjXuVjl.jpg","member":false,"manager":true,"poster":false,"weight":79.762},{"subjectId":"44621","name":"Jorge Carreto Bernal","username":"georgecarretto","professionalHeadline":"Platform Operations Freelancer - Costumer Service, Specialist I, Graphic Designer","picture":"https://starrgate.s3.amazonaws.com:443/users/03054609dfe764dfdb4c981e0c647ab1a753dc6c/profile_nFdZ3bN.jpg","member":false,"manager":true,"poster":false,"weight":19.7082},{"subjectId":"50406","name":"Diana Montoya","username":"diana_cujer","professionalHeadline":"Customer Success at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/329b49768e033b6550863462bfb9f3e5c2d12639/profile_mYTcFmi.jpg","member":false,"manager":true,"poster":false,"weight":1264.984},{"subjectId":"72289","name":"Jorge Andrés VELASCo VILORIA","username":"jorgeandresvelascoviloria","professionalHeadline":"Desarrollador de software","picture":"https://starrgate.s3.amazonaws.com:443/users/71755b2df07cb9fad7d0cbbc3716b16c4d35851e/profile_UmDSwQ4.jpg","member":true,"manager":true,"poster":false,"weight":0.0},{"subjectId":"487062","name":"jorge viloria","username":"reachmeellc","professionalHeadline":"ingeniero de sistema s","picture":null,"member":true,"manager":true,"poster":true,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"Objective-C punteros":12.0,"HTML":0.0,"PHP":0.0,"MySQL":0.0,"IOS":24.0,"Androide":12.0,"Xcode":0.0,"Laravel":0.0,"MVS":0.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["Objective-C punteros","HTML","PHP","MySQL","IOS","Androide","Xcode","Laravel","MVS"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"NrJOjeWD","objective":"Junior PHP Developer.","type":"full-time-employment","organizations":[{"id":335161,"name":"Marketgoo","picture":"https://torre-media.s3-us-west-2.amazonaws.com/marketgoo.png"}],"locations":[],"remote":true,"external":false,"deadline":"2020-08-07T04:30:00.000Z","status":"open","compensation":{"data":{"code":"range","currency":"EUR€","minAmount":24000.0,"maxAmount":30000.0,"periodicity":"yearly"},"visible":true},"skills":[{"code":32052,"name":"PHP","experience":"2-plus-years"},{"code":55381,"name":"Developer","experience":"2-plus-years"},{"code":59162,"name":"SQL","experience":"2-plus-years"}],"members":[{"subjectId":"144637","name":"Yuliana Velasquez Ramírez","username":"yulianavelasquezr","professionalHeadline":"Independent Recruiter Advisor.","picture":"https://starrgate.s3.amazonaws.com:443/users/da4a2c2dc317fc852cc4a59a943b2fc44d87e2a1/profile_rbJ9Jmm.jpg","member":true,"manager":true,"poster":true,"weight":687.726},{"subjectId":null,"name":"Wenceslao Garcia","username":"a869c978-1fd9-4e7c-8daa-eecc8147e221","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[{"id":"qdPKVbwb","text":"Hola, cumplo con todos los requerimientos que tienen. Pero estoy en Barranquilla, Colombia. ¿Puedo Aplicar?","date":"2020-07-09T15:55:45.000Z"},{"id":"6WaKRkd0","text":"¡Hola Nelson! Esta oferta laboral es completamente Remoto, así que puedes aplicar si lo deseas. Recuerda que tu hoja de vida es tu Bio aquí en Torre, en tu perfil puedes colocar toda tu trayectoria, así las empresas interesadas en ti podrán evaluarte. Para aplicar a esta oferta puedes darle click en \"aplicar\" al final de ella, en el proceso la persona encargada te estará informando. ¡Éxitos!","date":"2020-07-09T18:02:02.000Z"},{"id":"KWN8lNdO","text":"¡Hola Luis! Muchas gracias por escogernos, en el proceso la persona encargada te estará informando. ¡Éxitos!","date":"2020-07-10T18:17:47.000Z"},{"id":"jw0gXxWx","text":"Me gustaria aplicar, el ingles es obligatorio, ya que es el unico requisito con el cual no cuento?","date":"2020-07-17T21:53:52.000Z"},{"id":"6WZOq6w1","text":"¡Hola Stiwar! Tu hoja de vida es tu Bio aquí en Torre, en tu perfil puedes colocar toda tu trayectoria, así las empresas interesadas en ti podrán evaluarte, para aplicar a esta oferta puedes darle click en \"aplicar\" al final de ella, en el proceso la persona encargada te estará informando. ¡Éxitos!","date":"2020-07-17T22:29:03.000Z"}],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"PHP":24.0,"Developer":24.0,"SQL":24.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["PHP","Developer","SQL"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"2W1e6ZWq","objective":"Desarrollador Senior PHP","type":"full-time-employment","organizations":[{"id":317944,"name":"Rubixware","picture":"https://torre-media.s3-us-west-2.amazonaws.com/rubixware.png"}],"locations":["Mexico"],"remote":true,"external":false,"deadline":"2020-07-31T04:30:00.000Z","status":"open","compensation":{"data":{"code":"range","currency":"MXN$","minAmount":20000.0,"maxAmount":30000.0,"periodicity":"monthly"},"visible":true},"skills":[{"code":55367,"name":"Desarrollo web","experience":"1-plus-year"},{"code":32052,"name":"PHP","experience":"1-plus-year"},{"code":26327,"name":"Software","experience":"1-plus-year"}],"members":[{"subjectId":"218266","name":"Laura Natalia Motta Cadena","username":"LauraMotta","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/61518b5587392840302149719d440834999de9aa/profile_3bVf0Kb.jpg","member":true,"manager":true,"poster":true,"weight":131.1783},{"subjectId":null,"name":"Mario Mena","username":"81ab6661-8c05-4e68-9301-186cdf38eb02","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[{"id":"Nwq0oPW3","text":"Laura como estas, recomienda me a esa oferta me intereza mucho tengo las habilidades solicitadas","date":"2020-06-23T16:50:25.000Z"},{"id":"kWR3BAwN","text":"Hola estoy interesado en esta propuesta","date":"2020-06-23T18:46:45.000Z"},{"id":"6WaD0Rr0","text":"Buen Día, para tener en cuenta tu perfil durante el proceso de selección es indispensable que realices tu postulación a través de la opción Aplicación Rápida que se encuentra en la parte inferior del post","date":"2020-06-24T15:19:22.000Z"},{"id":"awyGgarN","text":"Buen Día, para tener en cuenta tu perfil durante el proceso de selección es indispensable que realices tu postulación a través de la opción Aplicación Rápida que se encuentra en la parte inferior del post","date":"2020-06-24T15:19:39.000Z"},{"id":"Prlbo2wk","text":"Hola Laura lo he intentado pero la aplicación no me deja avanzar en el proceso :) por eso te escribi","date":"2020-06-24T15:24:51.000Z"},{"id":"ldEMDjd7","text":"Si claro ya lo hice ","date":"2020-06-24T15:28:39.000Z"},{"id":"Owbjlpwo","text":"Que te aparece al aplicar?","date":"2020-06-24T15:31:13.000Z"},{"id":"VWM47krZ","text":"error request 500, acabo de reportarlo con torre.co","date":"2020-06-24T15:35:58.000Z"},{"id":"Vroj40dy","text":"Ok, sin embargo intenta realizar tu postulación más tarde ","date":"2020-06-24T15:42:38.000Z"}],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"Desarrollo web":12.0,"PHP":12.0,"Software":12.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["Desarrollo web","PHP","Software"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"awyxkQWN","objective":"Desarrollador .NET PHP","type":"full-time-employment","organizations":[{"id":234723,"name":"T&S Temservice","picture":"https://torre-media.s3-us-west-2.amazonaws.com/organizations/T%26STemservice.png"}],"locations":["Cra. 18 #36-41, Bogotá, Colombia"],"remote":false,"external":false,"deadline":null,"status":"open","compensation":{"data":{"code":"fixed","currency":"COP$","minAmount":3867000.0,"maxAmount":null,"periodicity":"monthly"},"visible":true},"skills":[{"code":55128,"name":".NET","experience":"2-plus-years"},{"code":32052,"name":"PHP","experience":"2-plus-years"}],"members":[{"subjectId":"22976","name":"David Velásquez Martínez","username":"davidvelasquezm","professionalHeadline":"Working on new ideas","picture":"https://starrgate.s3.amazonaws.com:443/users/6275f29db68df1d6f2707ae7d7309fd736e6bca2/profile_bBh88WW.jpg","member":false,"manager":true,"poster":false,"weight":543.0599},{"subjectId":"28020","name":"Adolfo Ramirez","username":"adolfo","professionalHeadline":"Recruiter advisor at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/4405fb50dbcff9fc0b75ab22a95e253bed8deb21/profile_6HDpcJr.jpg","member":true,"manager":true,"poster":false,"weight":0.0},{"subjectId":"42999","name":"ANGIE LORENA TORRES","username":"pruebasbogota","professionalHeadline":"talento humano","picture":null,"member":false,"manager":true,"poster":true,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{".NET":24.0,"PHP":24.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":[".NET","PHP"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"mwAgq9rJ","objective":"Desarrollador PHP Fullstack - SR Argentina","type":"full-time-employment","organizations":[{"id":316959,"name":"Contextus Latam","picture":"https://torre-media.s3-us-west-2.amazonaws.com/contextus.png"}],"locations":["Argentina"],"remote":true,"external":false,"deadline":"2020-07-31T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":55532,"name":"Full Stack Development","experience":"3-plus-years"},{"code":32052,"name":"PHP","experience":"3-plus-years"},{"code":55367,"name":"Desarrollo web","experience":"3-plus-years"}],"members":[{"subjectId":"218266","name":"Laura Natalia Motta Cadena","username":"LauraMotta","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/61518b5587392840302149719d440834999de9aa/profile_3bVf0Kb.jpg","member":false,"manager":true,"poster":true,"weight":131.1783},{"subjectId":null,"name":"Diego Fernandez.","username":"c56f9a24-8f20-42f1-a625-8cd608ad0455","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"Full Stack Development":36.0,"PHP":36.0,"Desarrollo web":36.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["Full Stack Development","PHP","Desarrollo web"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"PW9nN4wg","objective":"Solutions Architect","type":"full-time-employment","organizations":[{"id":331850,"name":"IWD Agency","picture":"https://torre-media.s3-us-west-2.amazonaws.com/IWD+Agency.JPG"}],"locations":["United States"],"remote":true,"external":false,"deadline":"2020-08-03T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":22600,"name":"Magento","experience":"2-plus-years"},{"code":45396,"name":"Leadership","experience":"2-plus-years"},{"code":55992,"name":"Organized","experience":"2-plus-years"},{"code":4356343,"name":"eCommerce development","experience":"2-plus-years"},{"code":32052,"name":"PHP","experience":"2-plus-years"},{"code":59162,"name":"SQL","experience":"2-plus-years"},{"code":279040,"name":"Solutions Architect","experience":"2-plus-years"}],"members":[{"subjectId":"46223","name":"Brallan Mendoza","username":"brallanmendozadelgado","professionalHeadline":"Independent Recruiter Advisor","picture":"https://starrgate.s3.amazonaws.com:443/users/0f55d09bfee0a04fca2c004d206b226b7b089b7a/profile_zxhMVOh.jpg","member":true,"manager":true,"poster":true,"weight":850.0},{"subjectId":null,"name":"Joe McFerrin","username":"f637a09d-f915-4df0-ad18-f4da0deaff2a","professionalHeadline":"CEO","picture":"https://torre-media.s3-us-west-2.amazonaws.com/0+%2825%29.jpg","member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"Magento":24.0,"Leadership":24.0,"Organized":24.0,"eCommerce development":24.0,"PHP":24.0,"SQL":24.0,"Solutions Architect":24.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["Magento","Leadership","Organized","eCommerce development","PHP","SQL","Solutions Architect"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"EW7zeZry","objective":"WordPress WooCommerce Developer (Remote)","type":"full-time-employment","organizations":[{"id":338167,"name":"Awesome Motive, Inc","picture":"https://torre-media.s3-us-west-2.amazonaws.com/Awesome+Motive%2C+Inc.png"}],"locations":[],"remote":true,"external":false,"deadline":"2020-07-28T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":32052,"name":"PHP","experience":"1-plus-year"},{"code":18319,"name":"Javascript","experience":"1-plus-year"},{"code":17226,"name":"WordPress","experience":"1-plus-year"},{"code":55734,"name":"WooCommerce","experience":"1-plus-year"}],"members":[{"subjectId":"219073","name":"Mariajosé Gómez","username":"mariajgomezg1","professionalHeadline":"Independent recruiter","picture":"https://starrgate.s3.amazonaws.com:443/users/1cdf6057e2ce1359eecd943e3f78b670e3e9a49f/profile_RO5e3cU.jpg","member":true,"manager":true,"poster":true,"weight":0.0},{"subjectId":null,"name":"Syed Balkhi","username":"c447ae50-4501-46d5-b630-904007f7f6f1","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"PHP":12.0,"Javascript":12.0,"WordPress":12.0,"WooCommerce":12.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["PHP","Javascript","WordPress","WooCommerce"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}},{"id":"ZW2M07r7","objective":"Developer PHP","type":"full-time-employment","organizations":[{"id":302022,"name":"Geopagos","picture":"https://torre-media.s3-us-west-2.amazonaws.com/GeoPagos.jpg"}],"locations":["Argentina"],"remote":true,"external":false,"deadline":"2020-07-31T04:30:00.000Z","status":"open","compensation":null,"skills":[{"code":32052,"name":"PHP","experience":"5-plus-years"},{"code":234085,"name":"Desarrollo de software","experience":"5-plus-years"},{"code":18318,"name":"HTML5","experience":"5-plus-years"}],"members":[{"subjectId":"218266","name":"Laura Natalia Motta Cadena","username":"LauraMotta","professionalHeadline":"Account Manager at Torre","picture":"https://starrgate.s3.amazonaws.com:443/users/61518b5587392840302149719d440834999de9aa/profile_3bVf0Kb.jpg","member":false,"manager":true,"poster":true,"weight":131.1783},{"subjectId":null,"name":"Sebastian Nuñez Castro","username":"94b72d86-b51e-4947-bb8a-2bd4ff2438e7","professionalHeadline":null,"picture":null,"member":true,"manager":false,"poster":false,"weight":0.0}],"questions":[],"context":{"signaled":[]},"_meta":{"rank":6674.0,"scorer":{"@type":"and","score":1.0,"and":[{"@type":"concrete","id":"experience","input":{"criteria":{"experiences":{"PHP":0.0}},"opportunity":{"experiences":{"PHP":60.0,"Desarrollo de software":60.0,"HTML5":60.0}}},"score":1.0},{"@type":"concrete","id":"skill","input":{"criteria":{"skills":["PHP"]},"opportunity":{"skills":["PHP","Desarrollo de software","HTML5"]}},"score":1.0}]},"filter":{"@type":"and","pass":true,"and":[{"@type":"concrete","pass":true,"id":"skill"},{"@type":"concrete","pass":true,"id":"experience"}]},"boosters":["status","internal"]}}],"size":10,"total":6749}'

        Views::render('jobs',array('jobs'=>$data['results']));
    }
}