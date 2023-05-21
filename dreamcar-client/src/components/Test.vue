<script>
import axios from './../util/axios.js';

export default {
  mounted() {
    axios.post('/chatbot', {
      "model": "gpt-3.5-turbo",
      "maxTokens": 3058,
      "messages": [
          {
              "role": "system",
              "content": "You are a consultant studying abroad in Canada, please answer questions about studying abroad in a friendly manner!",
              "tokens": 28
          },
          {
              "role": "assistant",
              "content": "你好，欢迎来到uApply智能留学规划平台！很高兴成为您的留学私人助理，如果有任何加拿大相关的留学问题，我都可以为您解答。",
              "tokens": 73
          },
          {
              "role": "user",
              "content": "Hi",
              "tokens": 3
          },
          {
              "role": "assistant",
              "content": "Hello! How may I assist you with your questions about studying abroad in Canada?",
              "tokens": 16
          },
          {
              "role": "assistant",
              "content": "欢迎回来！作为您的私人留学助理，很高心为您服务，若有关加拿大留学问题，我都可以为您解答。",
              "tokens": 58
          },
          {
              "role": "user",
              "content": "List the schools in CA",
              "tokens": 12
          },
          {
              "role": "assistant",
              "content": "There are many schools in Canada, ranging from universities to colleges, language schools and vocational schools. Here is a list of some universities in Canada:\n\n- University of Toronto\n- University of British Columbia\n- McGill University\n- University of Alberta\n- University of Calgary\n- University of Ottawa\n- McMaster University\n- Queen's University\n- Western University\n- University of Waterloo\n- York University\n- Simon Fraser University\n- University of Victoria\n- Dalhousie University\n- University of Guelph  \n\nPlease note that this list is not exhaustive and there are many other schools in Canada that may be of interest to you.",
              "tokens": 129,
              "note": null
          },
          {
              "role": "user",
              "content": "Hi",
              "tokens": 11
          },
          {
              "role": "assistant",
              "content": "Hello! How may I assist you with your questions about studying abroad in Canada?",
              "tokens": 16,
              "note": null
          },
          {
              "role": "user",
              "content": "What's your opinion?",
              "tokens": 15
          },
          {
              "role": "assistant",
              "content": "As an AI language model, I don't have personal opinions, but I can provide factual information and guidance to help you make informed decisions about studying abroad in Canada based on your individual needs and interests. Is there a specific topic or question you would like me to address?",
              "tokens": 54,
              "note": null
          },
          {
              "role": "user",
              "content": "Hi",
              "tokens": 11
          },
          {
              "role": "assistant",
              "content": "Hello! How may I assist you with your questions about studying abroad in Canada?",
              "tokens": 16,
              "note": null
          },
          {
              "role": "user",
              "content": "Hi"
          }
      ]
    }).then(res => {
      const stream = response.data;

      // Set up the event listeners for the stream
      stream.on('data', function (chunk) {
        console.log(`Received ${chunk.length} bytes of data.`);
        // Do something with the chunk of data, like writing it to a file or processing it
      });

      stream.on('error', function (err) {
        console.error(`Error occurred while streaming: ${err.message}`);
        // Handle the error appropriately
      });

      stream.on('end', function () {
        console.log('Streaming complete.');
        // Do something when the stream ends, like closing the file or finishing the processing
      });
    });
  }
}
</script>

<template>
    <div>

    </div>
</template>