export default async (req) => {
  const body = await req.text();
  console.log("T-Bank notification:", body);

  return new Response("OK", {
    status: 200,
    headers: { "Content-Type": "text/plain" }
  });
};
