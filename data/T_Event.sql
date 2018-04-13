USE [WeddingSCS]
GO

/****** Object:  Table [dbo].[T_Event]    Script Date: 04/10/2018 12:42:27 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[T_Event](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[Designation] [nvarchar](50) NULL,
	[Lieu] [nvarchar](50) NULL,
	[Date] [datetime] NULL,
 CONSTRAINT [PK_T_Event] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


