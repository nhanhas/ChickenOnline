<?php 
error_reporting(E_ERROR | E_PARSE);

//Define Drive FX settings
define("orderNdoc", 1);
define("backendUrl", "https://sis07.drivefx.net/2172d06c/PHCWS/REST");//TODO MUDAR AQUI 
$_SESSION['driveCredentials'] = array(
	userCode=>"admin",
	password=>"12345678",
	applicationType=>"HYU45F-FKEIDD-K93DUJ-ALRNJE",
	company=>""
);

	
//set as global Call HEADER for Drive fX
$ch = curl_init();


$msg = "Starting Sync...<br>";
echo $msg;
logData($msg);

//First Login at Drive
$loginResult = DRIVE_userLogin();
if($loginResult == false){
	$msg = "Error on Drive Login.<br>";
	echo $msg;
	logData($msg);
	exit(1);
}


//json for test
$inputJson = '
	{
	  "orders": {
	    "Cais Sodr?": [
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "001",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango simples",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "002",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango c/molho",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "003",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Frango c/picante",
	                                    "price": 8.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "004",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango simples",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "005",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango c/molho",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "006",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "1/2 Frango c/picante",
	                                    "price": 4.25,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "007",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "008",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola zero 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "009",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "010",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Coca-cola zero lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "011",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "?gua 0.5L",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "012",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "?gua 1.5L",
	                                    "price": 2.2,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "013",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Ice Tea 1.75L",
	                                    "price": 2.7,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "014",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Ice Tea lata",
	                                    "price": 1.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      },
	      {
	        "childs": [
	          {
	            "childs": [
	              {
	                "childs": [
	                  {
	                    "childs": [
	                      {
	                        "childs": [
	                          {
	                            "childs": [
	                              {
	                                "childs": [
	                                  {
	                                    "childs": [],
	                                    "plu": "015",
	                                    "count": 1,
	                                    "menuRelation": "item",
	                                    "title": "Batata frita pacote (180g)",
	                                    "price": 2.5,
	                                    "auxPrice": 0
	                                  }
	                                ],
	                                "plu": "",
	                                "menuRelation": "family",
	                                "title": "Family 1"
	                              }
	                            ],
	                            "plu": "",
	                            "menuRelation": "family",
	                            "title": "Root"
	                          }
	                        ],
	                        "plu": "",
	                        "referencedEnterpriseName": "O Cofre",
	                        "referencedEnterprisePhone": "sdfsdfsdf",
	                        "referencedEnterpriseAddress": "dfsdfsdf",
	                        "referencedEnterpriseCity": "sdfsdf",
	                        "referencedEnterpriseCountry": "Portugal",
	                        "menuRelation": "enterprise",
	                        "title": "Ementas",
	                        "referencedEnterpriseId": "1512742109328"
	                      }
	                    ],
	                    "plu": "",
	                    "menuRelation": "family",
	                    "title": "Ementa"
	                  }
	                ],
	                "plu": "",
	                "menuRelation": "family",
	                "title": "Root"
	              }
	            ],
	            "plu": "",
	            "referencedEnterpriseName": "O Cofre",
	            "referencedEnterprisePhone": "sdfsdfsdf",
	            "referencedEnterpriseAddress": "dfsdfsdf",
	            "referencedEnterpriseCity": "sdfsdf",
	            "referencedEnterpriseCountry": "Portugal",
	            "menuRelation": "enterprise",
	            "title": "O Cofre",
	            "referencedEnterpriseId": "1512742109328"
	          }
	        ],
	        "username": "joao.oleite@hotmail.com",
	        "orderCounter": 1,
	        "orderId": 405059,
	        "plu": "",
	        "extraInfo": [
	          {
	            "obs": "",
	            "nif": ""
	          },
	          {
	            "time": "19:00",
	            "date": "07/01/2018"
	          },
	          {
	            "ticket": "?57,05"
	          },
	          {
	            "complement": "",
	            "phone": "912202013",
	            "postalCode": "1200-001",
	            "referencePoint": "",
	            "address": "Cais Sodr?",
	            "longitude": "-9.143898000000036",
	            "Portugal (Portuguese)": "",
	            "phone2": "",
	            "number": "12",
	            "latitude": "38.7054214",
	            "city": "Lisboa"
	          }
	        ],
	        "orderDate": 1515342541352,
	        "firstName": "Jo?o",
	        "lastName": "Leite",
	        "activeFlags": [
	          {
	            "operatorEmail": "joao.oleite@hotmail.com",
	            "datetime": 1515887163902,
	            "operator": "Jo?o Leite",
	            "orderId": "405059",
	            "key": "FlagDoPedido1"
	          }
	        ],
	        "userId": "155614",
	        "paymentMethod": "mb",
	        "menuRelation": "family",
	        "title": "O Cofre"
	      }
	    ],
	    "Amadora": [{
				"childs": [{
					"childs": [{
						"childs": [{
							"childs": [{
								"childs": [{
									"childs": [{
										"childs": [{
											"childs": [],
											"plu": "001",
											"count": 1,
											"menuRelation": "item",
											"title": "Frango simples",
											"price": 8.5,
											"auxPrice": 0.0
										}],
										"plu": "",
										"menuRelation": "family",
										"title": "Family 1"
									}],
									"plu": "",
									"menuRelation": "family",
									"title": "Root"
								}],
								"plu": "",
								"referencedEnterpriseName": "O Cofre",
								"referencedEnterprisePhone": "sdfsdfsdf",
								"referencedEnterpriseAddress": "dfsdfsdf",
								"referencedEnterpriseCity": "sdfsdf",
								"referencedEnterpriseCountry": "Portugal",
								"menuRelation": "enterprise",
								"title": "Ementas",
								"referencedEnterpriseId": "1512742109328"
							}],
							"plu": "",
							"menuRelation": "family",
							"title": "Ementa"
						}],
						"plu": "",
						"menuRelation": "family",
						"title": "Root"
					}],
					"plu": "",
					"referencedEnterpriseName": "O Cofre",
					"referencedEnterprisePhone": "sdfsdfsdf",
					"referencedEnterpriseAddress": "dfsdfsdf",
					"referencedEnterpriseCity": "sdfsdf",
					"referencedEnterpriseCountry": "Portugal",
					"menuRelation": "enterprise",
					"title": "O Cofre",
					"referencedEnterpriseId": "1512742109328"
				}],
				"username": "joao.oleite@hotmail.com",
				"orderCounter": 1,
				"orderId": 403899,
				"plu": "",
				"extraInfo": [{
					"obs": "teste",
					"nif": ""
				}, {
					"time": "22:45",
					"date": "06/01/2018"
				}, {
					"ticket": "?17,00"
				}, {
					"complement": "",
					"phone": "912202013",
					"postalCode": "1200-001",
					"referencePoint": "",
					"address": "Cais Sodr?",
					"longitude": "-9.143898000000036",
					"Portugal (Portuguese)": "",
					"phone2": "",
					"number": "12",
					"latitude": "38.7054214",
					"city": "Lisboa"
				}],
				"orderDate": 1515197301932,
				"firstName": "Jo?o",
				"lastName": "Leite",
				"activeFlags": [{
					"operatorEmail": "joao.oleite@hotmail.com",
					"datetime": 1515887274247,
					"operator": "Jo?o Leite",
					"orderId": "403899",
					"key": "FlagDoPedido1"
				}],
				"userId": "155614",
				"paymentMethod": "mb",
				"menuRelation": "family",
				"title": "O Cofre"
				}, {
				"childs": [{
					"childs": [{
						"childs": [{
							"childs": [{
								"childs": [{
									"childs": [{
										"childs": [{
											"childs": [],
											"plu": "002",
											"count": 1,
											"menuRelation": "item",
											"title": "Frango c/molho",
											"price": 8.5,
											"auxPrice": 0.0
										}],
										"plu": "",
										"menuRelation": "family",
										"title": "Family 1"
									}],
									"plu": "",
									"menuRelation": "family",
									"title": "Root"
								}],
								"plu": "",
								"referencedEnterpriseName": "O Cofre",
								"referencedEnterprisePhone": "sdfsdfsdf",
								"referencedEnterpriseAddress": "dfsdfsdf",
								"referencedEnterpriseCity": "sdfsdf",
								"referencedEnterpriseCountry": "Portugal",
								"menuRelation": "enterprise",
								"title": "Ementas",
								"referencedEnterpriseId": "1512742109328"
							}],
							"plu": "",
							"menuRelation": "family",
							"title": "Ementa"
						}],
						"plu": "",
						"menuRelation": "family",
						"title": "Root"
					}],
					"plu": "",
					"referencedEnterpriseName": "O Cofre",
					"referencedEnterprisePhone": "sdfsdfsdf",
					"referencedEnterpriseAddress": "dfsdfsdf",
					"referencedEnterpriseCity": "sdfsdf",
					"referencedEnterpriseCountry": "Portugal",
					"menuRelation": "enterprise",
					"title": "O Cofre",
					"referencedEnterpriseId": "1512742109328"
				}],
				"username": "joao.oleite@hotmail.com",
				"orderCounter": 1,
				"orderId": 403899,
				"plu": "",
				"extraInfo": [{
					"obs": "teste",
					"nif": ""
				}, {
					"time": "22:45",
					"date": "06/01/2018"
				}, {
					"ticket": "?17,00"
				}, {
					"complement": "",
					"phone": "912202013",
					"postalCode": "1200-001",
					"referencePoint": "",
					"address": "Cais Sodr?",
					"longitude": "-9.143898000000036",
					"Portugal (Portuguese)": "",
					"phone2": "",
					"number": "12",
					"latitude": "38.7054214",
					"city": "Lisboa"
				}],
				"orderDate": 1515197301932,
				"firstName": "Jo?o",
				"lastName": "Leite",
				"activeFlags": [{
					"operatorEmail": "joao.oleite@hotmail.com",
					"datetime": 1515887274247,
					"operator": "Jo?o Leite",
					"orderId": "403899",
					"key": "FlagDoPedido1"
				}],
				"userId": "155614",
				"paymentMethod": "mb",
				"menuRelation": "family",
				"title": "O Cofre"
			}
		]
	  },
	  "action": "GerServerScriptOrders",
	  "version": "1.0.0",
	  "status": "SUCCESS",
	  "statusCode": 1
	}
';

//#1 - Process Json data to prepare an object
$orders = processInputJson($inputJson);
$msg = "> Orders received to Sync: <br>" .json_encode($orders, true) ." <br><br>";
echo $msg;
logData($msg);

//Start Sync...
foreach ($orders as $order) {
	//#1 - Process Customer
	$instanceCl = processCustomer($order['customer']);

	if($instanceCl == null){
		$msg = "Error on sync Order with Id = ".$order['orderId']." - Error in customer .<br><br>";
		echo $msg;
		logData($msg);
		continue;
	}

	//#2 - Now Process Order to Create it
	$newFt = createInvoice($order, $instanceCl);

	if($newFt == null){
		$msg = "Error on sync Order with Id = ".$order['orderId']." - Error in invoice creation .<br><br>";
		echo $msg;
		logData($msg);
		continue;
	}

	//At this point the Order has been synchronized

	$msg = "Order with Id = ".$order['orderId']." - synched with SUCCESS.<br><br>";
	echo $msg;
	logData($msg);

}


//function to create a single order
function createInvoice($orderInfo, $customerDrive){
	//#1 - Get an order new instance
	$newInstanceFt = DRIVE_getNewInstance("Ft", orderNdoc);
	if($newInstanceFt == null){
		$msg = "Error on getting new instance Ft. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}
	
	//#2 - Add customer no to order
	$newInstanceFt['no'] = $customerDrive['no'];

	//#2.1 - Then sync
	$newInstanceFt = DRIVE_actEntiy("Ft", $newInstanceFt);
	if($newInstanceFt == null){
		$msg = "Error on act entity for Invoice. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	//#3 - Update invoice info with customer data from actual order
	$newInstanceFt['morada'] 	= $orderInfo['customer']['address'];
	$newInstanceFt['local'] 	= $orderInfo['customer']['city'];
	$newInstanceFt['codpost'] 	= $orderInfo['customer']['zipcode'];
	$newInstanceFt['telefone'] 	= $orderInfo['customer']['phone'];

	//#2.3 - Then sync
	$newInstanceFt = DRIVE_actEntiy("Ft", $newInstanceFt);
	if($newInstanceFt == null){
		$msg = "Error on act entity for Invoice. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	//#3 - Now add products (they already have all needed, just join then to Bis)
	$newInstanceFt['fis'] = $orderInfo['products'];

	//#3.1 - Then sync
	$newInstanceFt = DRIVE_actEntiy("Ft", $newInstanceFt);
	if($newInstanceFt == null){
		$msg = "Error on act entity for Invoice. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	//Set ID in Ft.obs
	$newInstanceFt['obs'] = strval($orderInfo['orderId']);

	//#4 - Save Order
	$newInstanceFt = DRIVE_saveInstance("Ft", $newInstanceFt);
	if($newInstanceFt == null){
		$msg = "Error on save entity for Invoice. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	return $newInstanceFt;

}

//processing Customer to create or return one existing
function processCustomer($customer){
	//#0 - check if NIF is fulfilled
	if($customer['nif'] == '' || $customer['nif'] == null){
		$driveCustomer = DRIVE_getCustomerByEmail($customer['email']);

		if($driveCustomer != null){
			print_r("Exist client with this email<br>");
			return $driveCustomer;
		}
	}


	//nao e preciso else porque tem return caso nao tenha nif e encontre o cl generico

	//#1 - check if it already exists in Drive
	if($customer['nif'] != '' || $customer['nif'] != null){
		$driveCustomer = DRIVE_getCustomerByNcont($customer['nif']);
		if($driveCustomer != null){
			print_r("Exist Client with this NIF<br>");
			return $driveCustomer;
		}
	}

	//At this point means that we need to create
	$newInstanceCl = createCustomer($customer);

	if($newInstanceCl == null){
		$msg = "Error on process customer.<br><br>";
		echo $msg;
		logData($msg);
	}
	return $newInstanceCl;
}

//Just to Create a customer with all data needed
function createCustomer($customer){
		
	//#1 - get New Instance
	$newInstanceCl = DRIVE_getNewInstance("Cl", 0);
	if($newInstanceCl == null){
		$msg = "Error on getting new instance CL. <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	//#2 - fulfill properties
	$newInstanceCl['nome'] 			= $customer['name'];
	$newInstanceCl['email'] 		= $customer['email'];
	$newInstanceCl['morada'] 		= $customer['address'];
	$newInstanceCl['local'] 		= $customer['city'];
	$newInstanceCl['codpost'] 		= $customer['zipcode'];
	$newInstanceCl['ncont'] 		= $customer['nif'];
	//country
	$newInstanceCl['pncont'] 		= '';
	$newInstanceCl['paisesstamp'] 	= '185';
	$newInstanceCl['pais'] 			= 'Portugal';
	

	$newInstanceCl['obs'] 			= $customer['userId'];//obs will be the customer id from store
	$newInstanceCl['tlmvl'] 		= $customer['phone'];
	$newInstanceCl['telefone'] 		= $customer['phone2'];

	//#2 - an sync entity
	$newInstanceCl = DRIVE_actEntiy("Cl", $newInstanceCl);
	if($newInstanceCl == null){
		$msg = "Error on act entity for client name = " .$customer['name'] ." <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	//#3 - Save Customer
	$newInstanceCl = DRIVE_saveInstance("Cl", $newInstanceCl);
	if($newInstanceCl == null){
		$msg = "Error on act entity for client name = " .$customer['name'] ." <br><br>";
		echo $msg;
		logData($msg);
		return null;
	}

	$msg = "Customer created with number = " .$newInstanceCl['no']. " <br><br>";
	echo $msg;
	logData($msg);
	return $newInstanceCl;
}


//Get New Instance (Entity= Cl , Bo, St)
function DRIVE_getNewInstance($entity, $ndos){

	global $ch;

	$url = backendUrl . "/".$entity."WS/getNewInstance";
	$params =  array('ndos' => $ndos);

	$response=DRIVE_Request($ch, $url, $params);

	if(empty($response)){
		return null;
	}
	if(isset($response['messages'][0]['messageCodeLocale'])){
		return null;
	}


	return $response['result'][0];
}

//Sync entity Instance (Entity= Cl , Bo, St)
function DRIVE_actEntiy($entity, $itemVO){

	global $ch;

	$url = backendUrl . "/".$entity."WS/actEntity";
	$params =  array('entity' => json_encode($itemVO),
					 'code' => 0,
					 'newValue' => json_encode([])
				);

	$response=DRIVE_Request($ch, $url, $params);

	//echo json_encode( $response );
	if(empty($response)){
		return null;
	}
	if(isset($response['messages'][0]['messageCodeLocale']) && $response['messages'][0]['messageCode'] != 'messages.Business.Stocks.InvalidRefAutoCreate'){
		$msg = $response['messages'][0]['messageCodeLocale'];
		logData($msg);
		return null;
	}


	return $response['result'][0];
}

//save Instance (Entity= Cl , Bo, St)
function DRIVE_saveInstance($entity, $itemVO){

	global $ch;

	$url = backendUrl .  "/".$entity."WS/Save";
	$params =  array('itemVO' => json_encode($itemVO),
					 'runWarningRules' => 'false'
				);

	$response=DRIVE_Request($ch, $url, $params);

	//echo json_encode( $response );
	if(empty($response)){
		$msg = "Empty save";
		logData($msg);
		return null;
	}
	if(isset($response['messages'][0]['messageCodeLocale'])){
		$msg = $response['messages'][0]['messageCodeLocale'];
		logData($msg);
		return null;
	}


	return $response['result'][0];

	 }


//Call Drive to return an order by observation Id
function DRIVE_getCustomerByNcont($ncont){
	global $ch;

	// #1 - get Order By Id
	$url = backendUrl . '/SearchWS/QueryAsEntities';


	$params =  array('itemQuery' => '{
								  "entityName": "Cl",
								  "distinct": false,
								  "lazyLoaded": false,
								  "SelectItems": [],
								  "filterItems": [
									{
									  "filterItem": "ncont",
									  "valueItem": "'. $ncont .'",
									  "comparison": 0,
									  "groupItem": 0
									}
								  ],
								  "orderByItems": [],
								  "JoinEntities": [],
								  "groupByItems": []
								}');





	$response=DRIVE_Request($ch, $url, $params);

	if(empty($response)){
		return false;
	} else if(count($response['result']) == 0 ){
		return null;
	}

    return $response['result'][0];
}

//Call Drive to return an order by observation Id
function DRIVE_getCustomerByEmail($email){
	global $ch;
	// #1 - get Order By Id
	$url = backendUrl . '/SearchWS/QueryAsEntities';

	$params =  array('itemQuery' => '{
								  "entityName": "Cl",
								  "distinct": false,
								  "lazyLoaded": false,
								  "SelectItems": [],
								  "filterItems": [
									{
									  "filterItem": "email",
									  "valueItem": "'.$email.'",
									  "comparison": 0,
									  "groupItem": 0
									}
								  ],
								  "orderByItems": [],
								  "JoinEntities": [],
								  "groupByItems": []
								}');




	$response=DRIVE_Request($ch, $url, $params);

	if(empty($response)){
		return false;
	} else if(count($response['result']) == 0 ){
		return null;
	}

  return $response['result'][0];

}

// Drive Generic call
function DRIVE_Request($ch, $url,$params){

	// Build Http query using params
	$query = http_build_query ($params);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

	curl_setopt($ch, CURLOPT_BINARYTRANSFER, false);


	$response = curl_exec($ch);
	// send response as JSON
	return json_decode($response, true);
}

//Call Login
function DRIVE_userLogin(){
	global $ch;

	$url = backendUrl . '/UserLoginWS/userLoginCompany';

	// Create map with request parameters
	$params = $_SESSION['driveCredentials'];

	// Build Http query using params
	$query = http_build_query ($params);
	//initial request with login data

	//URL to save cookie "ASP.NET_SessionId"
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/32.0.1700.107 Chrome/32.0.1700.107 Safari/537.36');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	//Parameters passed to POST
	curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
	curl_setopt($ch, CURLOPT_COOKIEJAR, '');
	curl_setopt($ch, CURLOPT_COOKIEFILE, '');
	$response = curl_exec($ch);

	// send response as JSON
	$response = json_decode($response, true);
	if (curl_error($ch)) {
		return false;
	} else if(empty($response)){
		return false;
	} else if(isset($response['messages'][0]['messageCodeLocale'])){
		echo $response['messages'][0]['messageCodeLocale']."<br>";
		echo "Error in login. Please verify your username, password, applicationType and company." ;
		return false;
	}
	return true;
}




//# - Process JSON function
function processInputJson($json){
	$json = json_decode($json);
	$orders = array();

	//#1 - iterarte object throught Market Places: Cais Sodre, Amadora, etc
	foreach($json->orders as $place){
		//#2 - iterate through a single order
		$customer = array();
		$products = array();

		foreach ($place as $orderItem) {
			//#3 - in each orderItem we will get the product. Each orderItem has customer information
			//#3.1 - get customer info 
			$customer = array( 	'name' 		=> $orderItem->firstName . " " . $orderItem->lastName,
								'email' 	=> $orderItem->username,
								'nif' 		=> $orderItem->extraInfo[0]->nif,
								'zipcode' 	=> $orderItem->extraInfo[3]->postalCode,
								'phone'		=> $orderItem->extraInfo[3]->phone,
								'phone2'	=> $orderItem->extraInfo[3]->phone2,
								'address'	=> $orderItem->extraInfo[3]->address . " " . $orderItem->extraInfo[3]->number,
								'city'		=> $orderItem->extraInfo[3]->city,
								'userId'	=> $orderItem->userId
			);

			//#3.2 - get products 
			$newProduct = processJsonProducts($orderItem);
			$products[] = $newProduct;
			
		}
		
		//#4 - Add to Order
		$orders[] = array (
			'orderId'  => $orderItem->orderId, 
			'customer' => $customer,
			'products' => $products
		);

	}

	//return orders to main sincro life cycle
	return $orders;
	
}

//# return a single product
function processJsonProducts($orderItem){
	while (sizeof($orderItem->childs) > 0) {
		$orderItem = $orderItem->childs[0];		
	}	

	$product = array(
		'ref'		=> $orderItem->plu,
		'design'	=> $orderItem->title,
		'epv'		=> $orderItem->price,
		'qtt'		=> $orderItem->count,
		'ivaincl'	=> true
	);
	
	return $product;

}

/* Log Errors and data to Log */
function logData($data){

	$file = 'log.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current .=  "\n\n----------------------" . date("Y-m-d H:i:s") . "----------------------\n" . $data ;
	// Write the contents back to the file
	file_put_contents($file, $current);

}

?>