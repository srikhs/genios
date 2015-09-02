FB.ui({
  method: "stream.publish",
  display: "iframe",
  user_message_prompt: "Publish This!",
  message: "I am so smart!  S M R T!",
  attachment: {
     name: "Joe has a gift!",
     caption: "Joe has tested his skills and did extremely well",
     description: "Here is a list of Joe's skills:",
     href: "http://example.com/",
     media:[{"type":"image","src":"http://example.com/imgs/skills.png","href":"http://example.com/"}],
     properties:{
       "1)":{"text":"Reading","href":"http://example.com/skill.php?reading"},
       "2)":{"text":"Math","href":"http://example.com/skill.php?math"},
       "3)":{"text":"Farmville","href":"http://example.com/skill.php?farmville"}
     }
  },
  action_links: [{ text: 'Test yourself', href: 'http://example.com/test.php' }]
 },
 function(response) {
   if (response && response.post_id) {
     //alert('Post was published.');
   } else {
     //alert('Post was not published.');
   }
 }
);