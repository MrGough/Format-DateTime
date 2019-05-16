// DATE VALIDATION FUNCTION
function FormatDate( D )
{
  // SET DATE VARIABLES
  let dateObject = new Date(D);
  let Month = dateObject.getUTCMonth() + 1;
  let Day = dateObject.getUTCDate();
  let Year = dateObject.getUTCFullYear();
  let Hour = dateObject.getHours();
  let Minute = dateObject.getMinutes();
  let Full = Month + "/" + Day + "/" + Year;
  let Seconds = dateObject.getTime() / 1000;

  // BUILD DATE ARRAY
  let date = {
    'F': Full,
    'Y': Year,
    'D': Day,
    'M': Month,
    'MM': Minute,
    'HH': Hour,
    'SS': Seconds,
  };

  return date;
}
